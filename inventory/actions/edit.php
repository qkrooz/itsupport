<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include '../../serverConnection.php';
include '../../sendMail.php';
$section = $_POST['section'];
$id = $_POST['id'];
// echo "<script> alert('".$section."');</script>";
if($conn){
    switch ($section) {
        case 'Desktops':
            $sql = "SELECT * FROM Desktops WHERE id = $id";
            $stmt = sqlsrv_query($conn,$sql);
            while($row= sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $old[0] = $row['Brand'];
                $old[1] = $row['Model'];
                $old[2] = $row['ServiceTag'];
                $old[3] = $row['Location'];
                $old[4] = $row['Area'];
                $old[5] = $row['OS'];
                $old[6] = $row['Specs'];
                $old[7] = $row['Hostname'];
                $old[8] = $row['Country'];
                $old[9] = $row['Username'];
            }
            $new[0] = $_POST['brand'];
            $new[1] = $_POST['model'];
            $new[2] = $_POST['st'];
            $new[3] = $_POST['location'];
            $new[4] = $_POST['area'];
            $new[5] = $_POST['os'];
            $new[6] = $_POST['specs'];
            $new[7] = $_POST['hostname'];
            $new[8] = $_POST['country'];
            $new[9] = $_POST['username'];
            $data = array($old[0], $old[1], $old[2], $old[3], $old[4], $old[5], $old[6], $old[7], $old[8], $old[9], $new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $new[8], $new[9]);
            $sql = "UPDATE Desktops
                    SET Brand = ?, 
                        Model = ?, 
                        ServiceTag = ?,
                        Location = ?,
                        Area = ?,
                        OS = ?,
                        Specs = ?,
                        Hostname = ?,
                        Country = ?,
                        Username = ?
                    WHERE id = ?";
            $params = array($new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $new[8], $new[9], $id);
            $query = sqlsrv_query($conn, $sql, $params);
            sendmail($loguser, 'inventory', 'Desktops', 'modified', $data);
            break;
        case 'Laptops':
            $sql = "SELECT * FROM Laptops WHERE id = $id";
            $stmt = sqlsrv_query($conn,$sql);
            while($row= sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $old[0] = $row['Brand'];
                $old[1] = $row['Model'];
                $old[2] = $row['ServiceTag'];
                $old[3] = $row['SSO'];
                $old[4] = $row['UserName'];
                $old[5] = $row['Department'];
                $old[6] = $row['OS'];
                $old[7] = $row['Specs'];
                $old[8] = $row['Hostname'];
                $old[9] = $row['Country'];
            }
            $new[0] = $_POST['brand'];
            $new[1] = $_POST['model'];
            $new[2] = $_POST['st'];
            $new[3] = $_POST['sso'];
            $new[4] = $_POST['uname'];
            $new[5] = $_POST['udepartment'];
            $new[6] = $_POST['os'];
            $new[7] = $_POST['specs'];
            $new[8] = $_POST['hostname'];
            $new[9] = $_POST['country'];
            $data = array($old[0], $old[1], $old[2], $old[3], $old[4], $old[5], $old[6], $old[7], $old[8], $old[9], $new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $new[8], $new[9]);
            $sql = "UPDATE Laptops
            SET Brand = ?, 
                Model = ?, 
                ServiceTag = ?,
                SSO = ?,
                UserName = ?,
                Department = ?,
                OS = ?,
                Specs = ?,
                Hostname = ?,
                Country = ?
            WHERE id = ?";
            $params = array($new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $new[8], $new[9], $id);
            $query = sqlsrv_query($conn, $sql, $params);
            sendmail($loguser, 'inventory', 'Laptops', 'modified', $data);
            break;
        case 'Mobiles':
            $sql = "SELECT * FROM Mobiles WHERE id = $id";
            $stmt = sqlsrv_query($conn,$sql);
            while($row= sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $old[0] = $row['Brand'];
                $old[1] = $row['Model'];
                $old[2] = $row['IMEI'];
                $old[3] = $row['SSO'];
                $old[4] = $row['UserName'];
                $old[5] = $row['Department'];
                $old[6] = $row['Color'];
                $old[7] = $row['Specs'];
                $old[8] = $row['TelNumber'];
            }
            $new[0] = $_POST['brand'];
            $new[1] = $_POST['model'];
            $new[2] = $_POST['imei'];
            $new[3] = $_POST['sso'];
            $new[4] = $_POST['uname'];
            $new[5] = $_POST['udepartment'];
            $new[6] = $_POST['color'];
            $new[7] = $_POST['specs'];
            $new[8] = $_POST['number'];
            $data = array($old[0], $old[1], $old[2], $old[3], $old[4], $old[5], $old[6], $old[7], $old[8], $new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $new[8]);
            $sql = "UPDATE Mobiles
                    SET Brand = ?, 
                        Model = ?, 
                        IMEI = ?,
                        SSO = ?,
                        UserName = ?,
                        Department = ?,
                        Color = ?,
                        Specs = ?,
                        Telnumber = ?
                    WHERE id = ?";
            $params = array($new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $new[8], $id);
            $query = sqlsrv_query($conn, $sql, $params);
            sendmail($loguser, 'inventory', 'Mobiles', 'modified', $data);
            break;
        case 'Label_Printers':
            $sql = "SELECT * FROM Label_Printers WHERE id = $id";
            $stmt = sqlsrv_query($conn,$sql);
            while($row= sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $old[0] = $row['Brand'];
                $old[1] = $row['Model'];
                $old[2] = $row['SerialNumber'];
                $old[3] = $row['Location'];
                $old[4] = $row['Area'];
                $old[5] = $row['Tag'];
                $old[6] = $row['BartenderName'];
                $old[7] = $row['IPAddress'];
            }
            $new[0] = $_POST['brand'];
            $new[1] = $_POST['model'];
            $new[2] = $_POST['sn'];
            $new[3] = $_POST['location'];
            $new[4] = $_POST['area'];
            $new[5] = $_POST['tag'];
            $new[6] = $_POST['btname'];
            $new[7] = $_POST['ip'];
            $data = array($old[0], $old[1], $old[2], $old[3], $old[4], $old[5], $old[6], $old[7], $new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7]);
            $sql = "UPDATE Label_Printers
                    SET Brand = ?, 
                        Model = ?, 
                        SerialNumber = ?,
                        Location = ?,
                        Area = ?,
                        Tag = ?,
                        BartenderName = ?,
                        IPAddress = ?
                    WHERE id = ?";
            $params = array($new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $id);
            $query = sqlsrv_query($conn, $sql, $params);
            sendmail($loguser, 'inventory', 'Label Printers', 'modified', $data);
            break;
        case 'Laser_Printers':
            $sql = "SELECT * FROM Laser_Printers WHERE id = $id";
            $stmt = sqlsrv_query($conn,$sql);
            while($row= sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $old[0] = $row['Brand'];
                $old[1] = $row['Model'];
                $old[2] = $row['SerialNumber'];
                $old[3] = $row['Location'];
                $old[4] = $row['Area'];
                $old[5] = $row['DahillTag'];
                $old[6] = $row['Hostname'];
                $old[7] = $row['IPAddress'];
            }
            $new[0] = $_POST['brand'];
            $new[1] = $_POST['model'];
            $new[2] = $_POST['sn'];
            $new[3] = $_POST['location'];
            $new[4] = $_POST['area'];
            $new[5] = $_POST['dtag'];
            $new[6] = $_POST['nname'];
            $new[7] = $_POST['ip'];
            $data = array($old[0], $old[1], $old[2], $old[3], $old[4], $old[5], $old[6], $old[7], $new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7]);
            $sql = "UPDATE Laser_Printers
                    SET Brand = ?, 
                        Model = ?, 
                        SerialNumber = ?,
                        Location = ?,
                        Area = ?,
                        DahillTag = ?,
                        Hostname = ?,
                        IPAddress = ?
                    WHERE id = ?";
                    $params = array($new[0], $new[1], $new[2], $new[3], $new[4], $new[5], $new[6], $new[7], $id);
                    $query = sqlsrv_query($conn, $sql, $params);
                    sendmail($loguser, 'inventory', 'Laser Printers', 'modified', $data);
            break;
        case 'IPS':
            $sql = "SELECT * FROM IPS WHERE id = $id";
            $stmt = sqlsrv_query($conn,$sql);
            while($row= sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $old[0] = $row['IP'];
                $old[1] = $row['Device'];
                $old[2] = $row['Location'];
                $old[3] = $row['Area'];
            }
            $new[0] = $_POST['ip'];
            $new[1] = $_POST['device'];
            $new[2] = $_POST['location'];
            $new[3] = $_POST['area'];
            $data = array($old[0], $old[1], $old[2], $old[3], $new[0], $new[1], $new[2], $new[3]);
            $sql = "UPDATE IPS
                    SET IP = ?, 
                        Device = ?, 
                        Location = ?,
                        Area = ?
                    WHERE id = ?";
                    $params = array($new[0], $new[1], $new[2], $new[3], $id);
                    $query = sqlsrv_query($conn, $sql, $params);
                    sendmail($loguser, 'inventory', 'IPS', 'modified', $data);
            break;
        default:
        break;
    }

}
?>