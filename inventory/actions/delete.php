<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include '../../serverConnection.php';
include '../../sendMail.php';
$section=$_POST['section'];
switch($section){
    case 'Desktops':    
        $data = $_POST['data'];
        //FUNCTIONS DEFINITIONS
        function deleteitem($conn, $id){ 
            $sql = "DELETE FROM Desktops WHERE id = ?";
            $params = array($id);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wDesktopsLogs($conn, $loguser, $data){
            $sql = "INSERT INTO DesktopsLogs (NameUser, ActionUser, SectionLog, Date, Time,  Brand, Model, ServiceTag, Location, Area, OS, Specs, Hostname, Country, Username) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "deleted from";
            $section = "Desktops";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        //FUNCTIONS EXECUTION
        if($conn){
            deleteitem($conn, $data[0]);
            sendmail($loguser, 'inventory', 'Desktops', 'delete', $data);
            wDesktopsLogs($conn, $loguser, $data);
        }else{
            echo 'Ha ocurrido un error';
            die( print_r( sqlsrv_errors(), true));
        }
        break;
    case 'Laptops':    
        $data = $_POST['data'];
        function deleteitem($conn, $id){
            $sql = "DELETE FROM Laptops WHERE id = ?";
            $params = array($id);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wLaptopsLogs($conn, $loguser, $data){
            $sql = "INSERT INTO LaptopsLogs (NameUser, ActionUser, Date, Time, SectionLog, Brand, Model, ServiceTag, SSO, UserName, Department, OS, Specs, Hostname, Country) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "deleted from";
            $section = "Laptops";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $date, $time, $section, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if( $conn){
            deleteitem($conn, $data[0]);
            sendmail($loguser, 'inventory', 'Laptops', 'delete', $data);
            wLaptopsLogs($conn, $loguser, $data);
        }else{
                echo "Conexion fallo";
            }
        break;
    case 'Mobiles':    
        $data = $_POST['data'];
        //functions definitions
        function deleteitem($conn, $id){
            $sql = "DELETE FROM Mobiles WHERE id = ?";
            $params = array($id);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wMobilesLogs($conn, $loguser, $data){
            $sql = "INSERT INTO MobilesLogs (NameUser, ActionUser, Date, Time, SectionLog, Brand, Model, IMEI, SSO, Username, Department, Color, Specs, Telnumber) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "deleted from";
            $section = "Mobiles";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $date, $time, $section, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if($conn){
            deleteitem($conn, $data[0]);
            sendmail($loguser, 'inventory', 'Mobiles', 'delete', $data);
            wMobilesLogs($conn, $loguser, $data);
        }else{
            echo 'Ha ocurrido un error';
            die( print_r( sqlsrv_errors(), true));
        }
        break;
    case 'Label_Printers':   
        $data = $_POST['data'];
        //function definitions
        function deleteitem($conn, $id){
            $sql = "DELETE FROM Label_Printers WHERE id = ?";
            $params = array($id);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wLabelprintersLogs($conn, $loguser, $data){
            $sql = "INSERT INTO Label_PrintersLogs (NameUser, ActionUser, SectionLog, Date, Time, Brand, Model, SerialNumber, Location, Area, Tag, BartenderName, IPAddress) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "deleted from";
            $section = "Label Printers";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if($conn){
            deleteitem($conn, $data[0]);
            sendmail($loguser, 'inventory', 'Label Printers', 'delete', $data);
            wLabelprintersLogs($conn, $loguser, $data);
        }else{
            echo 'Ha ocurrido un error';
            die( print_r( sqlsrv_errors(), true));
        } 
        break;
    case 'Laser_Printers':  
        $data = $_POST['data'];
        //function definitions
        function deleteitem($conn, $id){
            $sql = "DELETE FROM Laser_Printers WHERE id = ?";
            $params = array($id);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wLaserprintersLogs($conn, $loguser, $data){
            $sql = "INSERT INTO Laser_PrintersLogs (NameUser, ActionUser, SectionLog, Date, Time,  Brand, Model, SerialNumber, Location, Area, DahillTag, NetName, IPAddress) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "deleted from";
            $section = "Laser Printers";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if($conn){
            deleteitem($conn, $data[0]);
            sendmail($loguser, 'inventory', 'Laser Printers', 'delete', $data);
            wLaserprintersLogs($conn, $loguser, $data);
        }else{
            echo "Conexion fallo";
            die( print_r( sqlsrv_errors(), true));
        }  
        break;
    case "IPS":    
        $data = $_POST['data'];
        //FUNCTIONS DEFINITIONS
        function deleteitem($conn, $id){ 
            $sql = "DELETE FROM IPS WHERE id = ?";
            $params = array($id);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wDesktopsLogs($conn, $loguser, $data){
            $sql = "INSERT INTO IPSLogs (NameUser, ActionUser, SectionLog, Date, Time, IP, Device, Location, Area) VALUES (?,?,?,?,?,?,?,?,?)";
            $action = "deleted from";
            $section = "Reserved IP's";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        //FUNCTIONS EXECUTION
        if($conn){
            deleteitem($conn, $data[0]);
            sendmail($loguser, 'inventory', 'IPS', 'delete', $data);
            wDesktopsLogs($conn, $loguser, $data);
        }else{
            echo 'Ha ocurrido un error';
            die( print_r( sqlsrv_errors(), true));
        }

        break;
    default:
	break;
}
?>