<?php 
if(!isset($_SESSION)) { 
    session_start(); 
} 
include '../../serverConnection.php';
$section = $_POST['section'];
$column = $_POST['column'];
$data = $_POST['data'];
$sql = "SELECT * FROM $section WHERE $column = '$data'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );  
$stmt = sqlsrv_query( $conn, $sql , $params, $options );
$rows = sqlsrv_num_rows($stmt);
echo $rows;
?>