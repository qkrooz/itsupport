<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
include '../../serverConnection.php';
$img = $_POST['img'];
$id = $_POST['id'];
unlink($img);
if($conn){
    $sql = "DELETE FROM Miscellaneous WHERE id = $id";
    $params = array($id);
    $add = sqlsrv_query( $conn, $sql, $params);
}
?>