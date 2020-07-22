<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
include '../serverConnection.php';
if(!isset($_POST['section'])){
    $section="Mouses";
}else{
    $section = $_POST['section'];
}
$capitaltype = strtoupper($section);
$type = rtrim($capitaltype, "S");
?>
<div class="row margpad">
    <div class="col-6"><h4><?php echo $section;?></h4></div>
    <div class="col-6 inventory-commands-right">
        <a class="command-btn" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i>Add New</a>
        <!-- <a class="command-btn"><i class="fas fa-eye"></i>Audit</a> -->
    </div>
    
</div>
<div class="row">
<?php
    if($conn){
        $sql = "SELECT * FROM Miscellaneous WHERE Type = '$type'";
        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $stmt = sqlsrv_query($conn,$sql, $params, $options);
        $rows = sqlsrv_num_rows($stmt);
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            $id=$row['id'];
            $image = $row['Image'];
            $brand = $row['Brand'];
            $model = $row['Model'];
            $description = $row['Description'];
            $location = $row['Location'];
            $stock = $row['Stock'];
            $minstock = $row['MinStock'];
            $barcode = $row['Barcode'];
            echo '
            <div class="col">
                <div class="card shadow-sm animated fadeIn" style="width: 18rem;">
                    <img class="card-img-top" src="'.$image.'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><span class="card-brand">'.$brand.'</span><span class="card-model">  '.$model.'</span></h5>
                        <p class="card-text text-center margpad">
                            '.$description.'
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6 class="margpad">Location</h6><p class="margpad">'.$location.'</p>
                        </li>
                        <li class="list-group-item card-stock">
                            <span class="col stock"><h6>Stock</h6><p class="margpad">'.$stock.'</p></span>
                            <span class="col max-stock"><h6>Min Stock</h6><p class="margpad">'.$minstock.'</p></span>       
                        </li>
                        <li class="list-group-item">
                            <h6>Barcode</h6><p class="margpad">'.$barcode.'</p>
                        </li>
                    </ul>
                    <div class="card-body" id="card-buttons">
                        <a data-m-category="'.$section.'" name="addmore-button" data-id="'.$id.'" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Add more of this"><i class="fas fa-plus-circle"></i></a>
                        <a data-m-category="'.$section.'" name="assign-button" data-id="'.$id.'" class="btn btn-info"><i class="fas fa-user-minus"></i></a>
                        <!--<a class="btn btn-primary"><i class="fas fa-barcode"></i></a> -->
                        <a data-m-category="'.$section.'" name="m-delete-button" class="btn btn-danger" data-id="'.$id.'" data-img="'.$image.'"><i class="fas fa-times-circle"></i></a>
                    </div>
                </div>
            </div>
            ';
        }
    }


?>
</div>
 <!-- Add Modal -->
 <div id="addModal" name="add-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Item</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" data-m-category=<?php echo $section;?> class="add-form" id="add-form" data-m-type=<?php echo $type;?> enctype="multipart/form-data">
                    <input type="file" name="image-upload" id="image-upload">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="description" id="st-input" placeholder="Description" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="stock" id="stock" placeholder="Current Stock" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="minstock" id="minstock" placeholder="Min Stock" required="required">
                    <button type="submit" class="add-btn btn btn-light" name="">Add device to <?php echo $section;?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="miscellaneous/js/action-add.js"></script>
<script src="miscellaneous/js/action-delete.js"></script>
<script src="miscellaneous/js/action-addmore.js"></script>
<script src="miscellaneous/js/action-assign.js"></script>


<!-- Card0 -->
