<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
include '../../serverConnection.php';
$quantity = $_POST['quantity'];
$id = $_POST['id'];
echo "<script> alert(".$id.");</script>";
if($conn){
    $sql = "SELECT Stock FROM Miscellaneous WHERE id = '$id'";
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query($conn,$sql, $params, $options);
    $rows = sqlsrv_num_rows($stmt);
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $oldQuantity = $row['Stock'];
    }
}

$newQuantity = $oldQuantity + $quantity;
if($conn){
    $sql = "UPDATE Miscellaneous
                    SET Stock = ?
                    WHERE id = $id";
    $params = array($newQuantity);
    $query = sqlsrv_query($conn, $sql, $params);
}
?>