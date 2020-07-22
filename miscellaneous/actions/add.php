<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
include '../../serverConnection.php';
if($conn){
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $stock = $_POST['stock'];
    $minstock = $_POST['minstock'];

    $target_dir = "img/miscellaneous/".$type."/";
    $target_file = $target_dir . basename($_FILES["image-upload"]["name"]);
    $image = $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["image_upload"])) {
        $check = getimagesize($_FILES["image-upload"]["tmp_name"]);
        echo"<script>alert(".$check.");</script>";
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["image-upload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image-upload"]["tmp_name"], "../../".$target_file)) {
            echo "The file ". basename( $_FILES["image-upload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


    counter();
    $barcode = $brand."-".$model."-".$counter;
    $data = array($type,$image,$brand,$model,$description,$location,$stock,$minstock,$barcode);
    addItem($conn, $data);
}
function addItem($conn, $data){
    $sql = "INSERT INTO Miscellaneous (Type, Image, Brand, Model, Description, Location, Stock, MinStock, Barcode) VALUES (?,?,?,?,?,?,?,?,?)";
    $params = array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]);
    $add = sqlsrv_query( $conn, $sql, $params);
}
function counter(){
        $archivo = "counter.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            global $counter;
            $counter = fread($f, filesize($archivo)); //leemos el archivo
            $counter = $counter + 1; //sumamos +1 al counter
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $counter);
            fclose($f);
        }
        
    }
?>