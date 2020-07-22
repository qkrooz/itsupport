<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
//Recibe informacion del boton EDIT, y la procesa para IMPRIMIR dentro del formulario de EDICION
include '../../serverConnection.php';
$id = $_POST['id'];
$section = $_POST['section'];
function makeolddata($conn, $section, $id){
    switch($section){
        case 'Desktops':
            $sql = "SELECT * FROM Desktops WHERE id=$id";
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
                return $old;
            }
        break;
        case 'Laptops':
            $sql = "SELECT * FROM Laptops WHERE id=$id";
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
                return $old;
            }
        break;
        case 'Mobiles':
            $sql = "SELECT * FROM Mobiles WHERE id=$id";
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
                return $old;
            }
        break;
        case 'LabelPrinters':
            $sql = "SELECT * FROM Label_Printers WHERE id=$id";
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
                return $old;
            }
        break;
        case 'LaserPrinters':
            $sql = "SELECT * FROM Laser_Printers WHERE id=$id";
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
                return $old;
            }
        break;
        case 'IPS':
            $sql = "SELECT * FROM IPS WHERE id=$id";
            $stmt = sqlsrv_query($conn,$sql);
            while($row= sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $old[0] = $row['IP'];
                $old[1] = $row['Device'];
                $old[2] = $row['Location'];
                $old[3] = $row['Area'];
                return $old;
            }
        break;
        default:
        break;
    }
}
function printIntoForm($section, $old){
    switch($section){
        case 'Desktops':
            echo '
            <input value="'.$old[0].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
            <input value="'.$old[1].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
            <input value="'.$old[2].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="st" id="st" placeholder="Service TAG" required="required">
            <input value="'.$old[3].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
            <input value="'.$old[4].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area" required="required">
            <input value="'.$old[5].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="os" id="os" placeholder="OS">
            <input value="'.$old[6].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="specs" id="specs" placeholder="Specs">
            <input value="'.$old[7].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="hostname" id="hostname" placeholder="Hostname">  
            <input value="'.$old[8].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="country" id="country" placeholder="Country">      
            <input value="'.$old[9].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="username" id="username" placeholder="Username">
            <button type="submit" class="add-btn btn btn-primary">Modify</button>
            ';
        break;
        case 'Laptops':
            echo'
            <input value="'.$old[0].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
            <input value="'.$old[1].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
            <input value="'.$old[2].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="st" id="st" placeholder="Service TAG" required="required">
            <input value="'.$old[3].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sso" id="sso" placeholder="SSO" required="required">
            <input value="'.$old[4].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="uname" id="uname" placeholder="User name" required="required">
            <input value="'.$old[5].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="udepartment" id="udepartment" placeholder="Department" required="required">
            <input value="'.$old[6].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="os" id="os" placeholder="OS" required="required">
            <input value="'.$old[7].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="specs" id="specs" placeholder="Specs" required="required">
            <input value="'.$old[8].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="hostname" id="hostname" placeholder="Hostname" required="required">          
            <input value="'.$old[9].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="country" id="country" placeholder="Country" required="required">
            <button type="submit" class="add-btn btn btn-primary">Modify</button>
            ';
        break;
        case 'Mobiles':
            echo'
            <input value="'.$old[0].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
            <input value="'.$old[1].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
            <input value="'.$old[2].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="imei" id="imei" placeholder="IMEI" required="required" >
            <input value="'.$old[3].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sso" id="sso" placeholder="SSO" required="required">
            <input value="'.$old[4].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="uname" id="uname" placeholder="User name" required="required">
            <input value="'.$old[5].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="udepartment" id="udepartment" placeholder="Department" required="required">
            <input value="'.$old[6].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="color" id="color" placeholder="Color" required="required">
            <input value="'.$old[7].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="specs" id="specs" placeholder="Specs" required="required"> 
            <input value="'.$old[8].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="number" id="number" placeholder="Tel Number" required="required">
            <button type="submit" class="add-btn btn btn-primary">Modify</button>
            ';
        break;
        case 'LabelPrinters':
            echo'
            <input value="'.$old[0].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
            <input value="'.$old[1].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
            <input value="'.$old[2].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sn" id="sn" placeholder="Serial Numer" required="required">
            <input value="'.$old[3].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
            <input value="'.$old[4].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area" required="required">
            <input value="'.$old[5].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="tag" id="tag" placeholder="TAG">
            <input value="'.$old[6].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="btname" id="btname" placeholder="Bartender Name">
            <input value="'.$old[7].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="ip" id="ip" placeholder="IP Adress">        
            <button type="submit" class="add-btn btn btn-primary">Modify</button>
            ';
        break;
        case 'LaserPrinters':
            echo'
            <input value="'.$old[0].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
            <input value="'.$old[1].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
            <input value="'.$old[2].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sn" id="sn" placeholder="Serial Number" required="required">
            <input value="'.$old[3].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
            <input value="'.$old[4].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area" required="required">
            <input value="'.$old[5].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="dtag" id="dtag" placeholder="DAHILL Tag">
            <input value="'.$old[6].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="nname" id="nname" placeholder="Net Name">
            <input value="'.$old[7].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="ip" id="ip" placeholder="IP Adress">
            <button type="submit" class="add-btn btn btn-primary">Modify</button>
            ';
        break;
        case 'IPS':
            echo'
            <input value="'.$old[0].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="ip" id="st-input" placeholder="IP" required="required">
            <input value="'.$old[1].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="device" id="device" placeholder="Device">
            <input value="'.$old[2].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location">
            <input value="'.$old[3].'" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area">
            <button name="add-button-inv" type="submit" class="add-btn btn btn-primary" data-section="IPS" data-column="IP" data-data="">Modify</button>
            ';
        break;
    }
}
if($conn){
    $old = makeolddata($conn, $section, $id);
    printIntoForm($section, $old);
}
?>

