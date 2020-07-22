<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
include '../../serverConnection.php';
include '../../authentication.php';
$id = $_POST['id'];
$category = $_POST['category'];
$userassigned = $_POST['user'];
$locationassigned = $_POST['location'];
echo "<script>alert(".$locationassigned.")</script>";
$motive = $_POST['motive'];
$newData = array($id, $category, $userassigned, $locationassigned, $motive);
// Saber datos antiguos
if($conn){
knowOld($conn, $id);
writeLogs($conn, $loguser, $oldData, $newData);
modifyStock($conn, $newData, $oldData);
}

function knowOld($conn, $id){
    $sql = "SELECT * FROM Miscellaneous WHERE id = $id";
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query($conn,$sql, $params, $options);
    $rows = sqlsrv_num_rows($stmt);
    if($rows){
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            $oldType = $row['Type'];
            $oldBrand = $row['Brand'];
            $oldModel = $row['Model'];
            $oldDescription = $row['Description'];
            $oldLocation = $row['Location'];
            $oldStock = $row['Stock'];
            $oldMinStock = $row['MinStock'];
            $oldBarcode = $row['Barcode'];
            global $oldData ;
            $oldData = array($oldType, $oldBrand, $oldModel, $oldDescription, $oldLocation, $oldStock, $oldModel, $oldBarcode);
        }
    }else{
        echo "No hay dato alguno";
    }

}
function writeLogs($conn, $loguser, $oldData, $newData){
    $sql = "INSERT INTO MiscellaneousLogs (ITuser, Time, Date, Action, Type, Brand, Model, Description, OldLocation, NewLocation, GEuser, Motive, Barcode) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $action = "assigned to";
    $date = date("d-m-Y");
    $time = date('H:i:s'); 
    $params = array($loguser, $time, $date, $action, $oldData[0], $oldData[1], $oldData[2], $oldData[3], $oldData[4], $newData[3], $newData[2], $newData[4], $oldData[7]);
    $add = sqlsrv_query( $conn, $sql, $params);
}
function modifyStock($conn, $newData, $oldData){
    $oldStock = $oldData[5];
    $newStock = $oldStock - 1; 
    $sql = "UPDATE Miscellaneous
            SET Stock = ?
            WHERE id = $newData[0]";
    $params = array($newStock);
    $query = sqlsrv_query($conn, $sql, $params);
}
?>