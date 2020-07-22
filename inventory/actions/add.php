<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include '../../serverConnection.php';
include '../../sendMail.php';
$section=$_POST['section'];
// echo $section;
switch($section){
    case 'Desktops': 
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $st = $_POST['st'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $os = $_POST['os'];
        $specs = $_POST['specs'];
        $hostname = $_POST['hostname'];
        $country = $_POST['country'];
        $username = $_POST['username'];
        $data = array($brand,$model,$st,$location,$area,$os,$specs,$hostname,$country,$username);
        //Functions definitions
        function additemDesktops($conn, $data){
            $sql = "INSERT INTO Desktops (Brand, Model, ServiceTag, Location, Area, OS, Specs, Hostname, Country, Username) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $params = array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wDesktopsLogs($conn, $loguser, $data){
            $sql = "INSERT INTO DesktopsLogs (NameUser, ActionUser, SectionLog, Date, Time, Brand, Model, ServiceTag, Location, Area, OS, Specs, Hostname, Country, Username) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "added into";
            $section = "Desktops";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if( $conn){
                additemDesktops($conn,$data);  
                sendmail($loguser, 'inventory', 'Desktops','add', $data);
                wDesktopsLogs($conn, $loguser, $data);
        
        }else{
            echo "Conexion fallo";
            die( print_r( sqlsrv_errors(), true));
        }   
        break;
    case 'Laptops':  
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $st = $_POST['st'];
        $sso = $_POST['sso'];
        $uname = $_POST['uname'];
        $udepartment = $_POST['udepartment'];
        $os = $_POST['os'];
        $specs = $_POST['specs'];
        $hostname = $_POST['hostname'];
        $country = $_POST['country'];
        $data = array($brand,$model,$st,$sso,$uname,$udepartment,$os,$specs,$hostname,$country);
        //Functions definitions
        function additemLaptops($conn, $data){
            $sql = "SELECT * FROM Laptops";
            $sql = "INSERT INTO Laptops (Brand, Model, ServiceTag, SSO, UserName, Department, OS, Specs, Hostname, Country) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $params = array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wLaptopsLogs($conn, $loguser, $data){
            $sql = "INSERT INTO LaptopsLogs (NameUser, ActionUser, Date, Time, SectionLog, Brand, Model, ServiceTag, SSO, UserName, Department, OS, Specs, Hostname, Country) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "added into";
            $section = "Laptops";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $date, $time, $section, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]);
            $add = sqlsrv_query( $conn, $sql, $params);  
        }
        if( $conn){ 
            additemLaptops($conn,$data);  
            sendmail($loguser, 'inventory', 'Laptops','add', $data);
            wLaptopsLogs($conn, $loguser, $data);
        }else{
            echo "Conexion fallo";
            die( print_r( sqlsrv_errors(), true));
        }  
        break;
    case 'Mobiles':  
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $imei = $_POST['imei'];
        $sso = $_POST['sso'];
        $uname = $_POST['uname'];
        $udepartment = $_POST['udepartment'];
        $color = $_POST['color'];
        $specs = $_POST['specs'];
        $number = $_POST['number'];
        $data = array($brand,$model,$imei,$sso,$uname,$udepartment,$color,$specs,$number);
        function additemMobiles($conn, $data){
            $sql = "INSERT INTO Mobiles (Brand, Model, IMEI, SSO, UserName, Department, Color, Specs, TelNumber) VALUES (?,?,?,?,?,?,?,?,?)";
            $params = array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wMobilesLogs($conn, $loguser, $data){
            $sql = "INSERT INTO MobilesLogs (NameUser, ActionUser, Date, Time, SectionLog, Brand, Model, IMEI, SSO, Username, Department, Color, Specs, Telnumber) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "added into";
            $section = "Mobiles";
            $date = date("d-m-Y");
            $time = date('H:i:s');  
            $params = array($loguser, $action, $date, $time, $section,$data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if($conn){
            additemMobiles($conn, $data);
            sendmail($loguser, 'inventory', 'Mobiles','add', $data);
            wMobilesLogs($conn, $loguser, $data);
        }else{
            echo "Conexion fallo";
            die( print_r( sqlsrv_errors(), true));
        }  
        break;
    case 'Label_Printers':   
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $sn = $_POST['sn'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $tag = $_POST['tag'];
        $btname = $_POST['btname'];
        $ip = $_POST['ip'];
        $data = array($brand, $model, $sn, $location, $area, $tag, $btname, $ip);
        //function definitions
        function additemLabelPrinters($conn, $data){
            $sql = "INSERT INTO Label_Printers (Brand, Model, SerialNumber, Location, Area, Tag, BartenderName, IPAddress) VALUES (?,?,?,?,?,?,?,?)";
            $params = array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wLabelprintersLogs($conn, $loguser, $data){
            $sql = "INSERT INTO Label_PrintersLogs (NameUser, ActionUser, SectionLog, Date, Time, Brand, Model, SerialNumber, Location, Area, Tag, BartenderName, IPAddress) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "added into";
            $section = "Label Printers";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if($conn){
            additemLabelPrinters($conn, $data);
            sendmail($loguser, 'inventory', 'Label Printers', 'add', $data);
        }else{
            echo 'Ha ocurrido un error';
            die( print_r( sqlsrv_errors(), true));
        } 
        break;
    case 'Laser_Printers':    
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $sn = $_POST['sn'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $dtag = $_POST['dtag'];
        $nname = $_POST['nname'];
        $ip = $_POST['ip'];
        $data = array($brand,$model,$sn,$location,$area,$dtag,$nname,$ip);
        //function definitions
        function additemLaserPrinters($conn, $data){
            $sql = "INSERT INTO Laser_Printers (Brand, Model, SerialNumber, Location, Area, DahillTag, Hostname, IPAddress) VALUES (?,?,?,?,?,?,?,?)";
            $params = array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wLaserprintersLogs($conn, $loguser, $data){
            $sql = "INSERT INTO Laser_PrintersLogs (NameUser, ActionUser, SectionLog, Date, Time,  Brand, Model, SerialNumber, Location, Area, DahillTag, NetName, IPAddress) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $action = "added into";
            $section = "Laser Printers";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if($conn){
            additemLaserPrinters($conn, $data);
            sendmail($loguser, 'inventory', 'Laser Printers','add', $data);
            wLaserprintersLogs($conn, $loguser, $data);
        }else{
            echo "Conexion fallo";
            die( print_r( sqlsrv_errors(), true));
        }
        break;
    case "IPS":    
        $ip = $_POST['ip'];
        $device = $_POST['device'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $data = array($ip,$device,$location,$area);
        //Functions definitions
        function additemIPS($conn, $data){
            $sql = "INSERT INTO IPS (IP, Device, Location, Area) VALUES (?,?,?,?)";
            $params = array($data[0], $data[1], $data[2], $data[3]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        function wDesktopsLogs($conn, $loguser, $data){
            $sql = "INSERT INTO IPSLogs (NameUser, ActionUser, SectionLog, Date, Time, IP, Device, Location, Area) VALUES (?,?,?,?,?,?,?,?,?)";
            $action = "added into";
            $section = "Reserved IP's";
            $date = date("d-m-Y");
            $time = date('H:i:s'); 
            $params = array($loguser, $action, $section, $date, $time, $data[0], $data[1], $data[2], $data[3]);
            $add = sqlsrv_query( $conn, $sql, $params);
        }
        if( $conn){
            additemIPS($conn,$data);  
            sendmail($loguser, 'inventory', 'IPS','add', $data);
            wDesktopsLogs($conn, $loguser, $data);
        }else{
            echo "Conexion fallo";
            die( print_r( sqlsrv_errors(), true));
        }
        break;
    default:
	break;
}

?>