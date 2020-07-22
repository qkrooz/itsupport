<?php 
if(!isset($_SESSION)) { 
    session_start(); 
}
include '../serverConnection.php';
include '../authentication.php';
$section = $_POST['section'];
#set add Modal
switch($section){
    case 'Desktops':    
        $addmodal = '#addDesktops';
        break;
    case 'Laptops':    
        $addmodal = '#addLaptops';
        break;
    case 'Mobiles':    
        $addmodal = '#addMobiles';
        break;
    case 'Label_Printers':    
        $addmodal = '#addLabelPrinters';
        break;
    case 'Laser_Printers':
        $addmodal = '#addLaserPrinters';    
        break;
    case "IPS":   
        $addmodal = '#addIps'; 
        break;
    default:
        break;
}
if($conn){
    $sql = "SELECT * FROM $section ORDER BY id DESC";
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query($conn,$sql, $params, $options);
    $rows = sqlsrv_num_rows($stmt);
}
?>
<!-- COMMANDS START -->
<div class="col-12 margpad innerfetchedcontent-fix animated fadeIn">
    <!-- dos rows de adentro -->
    <div class="row margpad inventory-actions justify-content-between">
        <div class="col-auto inventory-commands-left margpad align-items-center">
            <div class="input-group search-input">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input id="searchkey" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col margpad align-items center">
            <div class="row h-100 margpad d-flex align-items-center justify-content-start">
                <div class="col-auto text-left"><span class="button-text info-text">Total elements:<strong><?php echo " ".$rows;?></strong></span></div>
                <!-- <div class="col-auto align-items-center">
                        <span class="button-text info-text">Showing:</span>
                        <select class="custom-select" id="inv-quantity">
                            <option value="20">20</option>
                        </select>     
                </div>
                <div class="col-auto offset-1 align-items-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div> 
        <div class="col-auto inventory-commands-right margpad d-flex align-items-center">
            <a data-target=<?php echo $addmodal;?> data-toggle="modal" class="command-btn" data-section=<?php echo $section?>><i class="fas fa-plus"></i><span class="button-text">Add New</span></a>
            <a data-toggle="modal" data-target="#auditModal" name="audit-inventory" data-audit=<?php echo $section;?> type="button" class="command-btn" data-section=<?php echo $section?>><i class="fas fa-eye"></i><span class="button-text">Audit</span></a>
            <a class="command-btn" id="btn-excel" name="download-excel" data-section=<?php echo $section;?>><i class="fas fa-file-excel"></i><span class="button-text">Download</span></a>
        </div>
    </div>
    <div class="row margpad inventory-content">
        <div class="col-12 margpad innerinventorycontent-fix">
            <div class="table-header row margpad">
                <table id="inventory-table-header">
                    <thead>
                        <tr id="th-headers">
                            <?php
                            switch ($section) {
                                case 'Desktops':
                                    echo'
                                        <th><a name=sort-brand-desktops>Brand<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-model-desktops">Model<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-st-desktops">Service Tag<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-loc-desktops">Location<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-area-desktops">Area<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-os-desktops">OS<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-specs-desktops">Specs<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-hostname-desktops">Hostname<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-country-desktops">Country<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-username-desktops">Username<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th class="noExl" width="5%"></th> 
                                    ';
                                    break;
                                case 'Laptops':
                                    echo'
                                    <th><a name="sort-brand-laptops">Brand<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-model-laptops">Model<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-st-laptops">Service Tag<div class="sort-icon"><i class="fas fa-sort"></i></div></th>
                                    <th><a name="sort-sso-laptops">SSO<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-username-laptops">User Name<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-department-laptops">Department<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-os-laptops">OS<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-specs-laptops">Specs<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-country-laptops">Hostname<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-hostname-laptops" >Country<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th width="6%" class="noExl"></th> 
                                    ';
                                    break;
                                case 'Mobiles':
                                    echo'
                                    <th><a name="sort-brand-mobiles">Brand<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-model-mobiles">Model<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-imei-mobiles">IMEI<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-sso-mobiles">SSO<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-username-mobiles">User Name<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-department-mobiles">Department<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-color-mobiles">Color<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-specs-mobiles">Specs<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name="sort-telnumber-mobiles">Tel Number<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th width="5%"></th>
                                    ';
                                    break;
                                case 'Label_Printers':
                                    echo'
                                    <th><a name=sort-brand-labelprinters>Brand<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-model-labelprinters>Model<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-sn-labelprinters>Serial Number<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-location-labelprinters>Location<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-area-labelprinters>Area<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-tag-labelprinters>Tag<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-btname-labelprinters>Bartender Name<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-ip-labelprinters>IP Adress<div class="sort-icon"><i class="fas fa-sort"></i></div></th>
                                    <th width="5%"></th>
                                    ';
                                    break;
                                case 'Laser_Printers':
                                    echo'
                                    <th><a name=sort-brand-laserprinters>Brand<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-model-laserprinters>Model<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-sn-laserprinters>Serial Number<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-location-laserprinters>Location<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-area-laserprinters>Area<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-dtag-laserprinters>DAHILL Tag<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-netname-laserprinters>Net Name<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th><a name=sort-ip-laserprinters>IP Adress<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                    <th width="5%"></th> 
                                    ';
                                    break;
                                case "IPS":
                                    echo'
                                        <th><a name=sort-ip-ips>IP<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-device-ips">Device<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-location-ips">Location<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th><a name="sort-area-ips">Area<div class="sort-icon"><i class="fas fa-sort"></i></div></a></th>
                                        <th width="5%"></th> 
                                    ';
                                    break;
                                
                                default:
                                    break;
                            }
                            ?>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- BODY TABLE -->
            <div class="table-body row margpad">
                <table id="fetched-content-table">
                    <tbody id="tbody-content-table">
                        <?php
                            // consulta SQL
                            if($conn){
                                if($section === "IPS"){
                                    $sql = "SELECT * FROM $section ORDER BY id";
                                    $params = array();
                                    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                                    $stmt = sqlsrv_query($conn,$sql, $params, $options);
                                    $rows = sqlsrv_num_rows($stmt);
                                }else{
                                    $sql = "SELECT * FROM $section ORDER BY id DESC";
                                    $params = array();
                                    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                                    $stmt = sqlsrv_query($conn,$sql, $params, $options);
                                    $rows = sqlsrv_num_rows($stmt);
                                }
                                switch($section){
                                    case 'Desktops':  
                                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                            $id = $row['id'];
                                            $brand = $row['Brand'];
                                            $model = $row['Model'];
                                            $st = $row['ServiceTag'];
                                            $location = $row['Location'];
                                            $area = $row['Area'];
                                            $os = $row['OS'];
                                            $specs = $row['Specs'];
                                            $hostname = $row['Hostname'];
                                            $country = $row['Country'];
                                            $username = $row['Username'];  
                                            echo 
                                            "<tr class='context-action'><td>".$brand."</td>".
                                            "<td>".$model."</td>".
                                            "<td>".$st."</td>".
                                            "<td>".$location."</td>".
                                            "<td>".$area."</td>".
                                            "<td>".$os."</td>".
                                            "<td>".$specs.'</td>'.
                                            "<td>".$hostname.'</td>'.
                                            "<td>".$country.'</td>'.
                                            "<td>".$username.'</td>'.
                                            "<td width='4%' class='noExl'>
                                            <div class='btn margpad'>
                                                <button type='button' class='btn btn-sm btn-light' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                    <i class='fas fa-ellipsis-v'></i>
                                                </button>
                                                <div class='dropdown-menu'>
                                                    <a name='edit-button' class='dropdown-item' data-toggle='modal' data-id='".$id."' data-section='Desktops' data-target=".'"#editModal"'."><i class='mr-1 fas fa-edit'></i>Edit</a>
                                                    <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$st.",".$location.",".$area.",".$os.",".$specs.",".$hostname.",".$country.",".$username."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a class='dropdown-item'>
                                                </div>
                                            </div>
                                            </td></tr>";
                                        }
                                        break;
                                    case 'Laptops':    
                                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                        $id = $row['id'];
                                        $brand = $row['Brand'];
                                        $model = $row['Model'];
                                        $st = $row['ServiceTag'];
                                        $sso = $row['SSO'];
                                        $username = $row['UserName'];
                                        $department = $row['Department'];
                                        $os = $row['OS'];
                                        $specs = $row['Specs'];
                                        $country = $row['Hostname'];
                                        $hostname = $row['Country'];
                                        echo '<tr>'.
                                            "<td>".$brand."</td>".
                                            "<td>".$model."</td>".
                                            "<td>".$st."</td>".
                                            "<td>".$sso."</td>".
                                            "<td>".$username."</td>".
                                            "<td>".$department."</td>".
                                            "<td>".$os.'</td>'.
                                            "<td>".$specs.'</td>'.
                                            "<td>".$country.'</td>'.
                                            "<td>".$hostname.'</td>'.
                                            "<td width='5%' class='noExl'>
                                            <div class='btn mergpad'>
                                                <button type='button' class='btn btn-sm btn-light' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                    <i class='fas fa-ellipsis-v'></i>
                                                </button>
                                                <div class='dropdown-menu'>
                                                    <a name='edit-button' class='dropdown-item' data-toggle='modal' data-id='".$id."' data-section='Laptops' data-target=".'"#editModal"'."><i class='mr-1 fas fa-edit'></i>Edit</a>
                                                    <a class='dropdown-item' target = '_blank' href='./resources/pdf/pdf_laptop.php?no=".$row['ServiceTag']."&sso=".$row['SSO']."&user=".$row['UserName']."&dep=".$row['Department']."&brand=".$row['Brand']."&model=".$row['Model']."&specs=".$row['Specs']."''><i class='mr-1 fas fa-file-pdf'></i>Generate PDF</a>
                                                    <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$st.",".$sso.",".$username.",".$department.",".$os.",".$specs.",".$country.",".$hostname."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a class='dropdown-item'>
                                                </div>
                                            </div>
                                            </td>
                                            </tr>";
                                        }
                                        break;
                                    case 'Mobiles': 
                                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {  
                                        $id = $row['id'];
                                        $brand = $row['Brand'];
                                        $model = $row['Model'];
                                        $imei = $row['IMEI'];
                                        $sso = $row['SSO'];
                                        $username = $row['UserName'];
                                        $department = $row['Department'];
                                        $color = $row['Color'];
                                        $specs = $row['Specs'];
                                        $telnumber = $row['TelNumber']; 
                                        echo '<tr>'.
                                            "<td>".$brand."</td>".
                                            "<td>".$model."</td>".
                                            "<td>".$imei."</td>".
                                            "<td>".$sso."</td>".
                                            "<td>".$username."</td>".              
                                            "<td>".$department."</td>".
                                            "<td>".$color.'</td>'.
                                            "<td>".$specs.'</td>'.
                                            "<td>".$telnumber.'</td>'.
                                            "<td width='5%' class='noExl'>
                                            <div class='btn margpad'>
                                                <button type='button' class='btn btn-sm btn-light' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                    <i class='fas fa-ellipsis-v'></i>
                                                </button>
                                                <div class='dropdown-menu'>
                                                    <a name='edit-button' class='dropdown-item' data-toggle='modal' data-id='".$id."' data-section='Mobiles' data-target=".'"#editModal"'."><i class='mr-1 fas fa-edit'></i>Edit</a>
                                                    <a class='dropdown-item' target = '_blank' href='./resources/pdf/pdf_mobile.php?no=".$row['IMEI']."&sso=".$row['SSO']."&user=".$row['UserName']."&dep=".$row['Department']."&brand=".$row['Brand']."&model=".$row['Model']."&specs=".$row['Specs']."''><i class='mr-1 fas fa-file-pdf'></i>Generate PDF</a>
                                                    <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$imei.",".$sso.",".$username.",".$department.",".$color.",".$specs.",".$telnumber."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a>
                                                </div>
                                            </div>
                                            </td>
                                            </tr>";
                                        }
                                        break;
                                    case 'Label_Printers':  
                                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                        $id = $row['id'];
                                        $brand = $row['Brand'];
                                        $model = $row['Model'];
                                        $sn = $row['SerialNumber'];
                                        $location = $row['Location'];
                                        $area = $row['Area'];
                                        $tag = $row['Tag'];
                                        $btname = $row['BartenderName'];
                                        $ip = $row['IPAddress'];  
                                        echo '<tr>'.
                                            "<td>".$brand."</td>".
                                            "<td>".$model."</td>".
                                            "<td>".$sn."</td>".
                                            "<td>".$location."</td>".
                                            "<td>".$area."</td>".
                                            "<td>".$tag."</td>".
                                            "<td>".$btname.'</td>'.
                                            "<td>".$ip.'</td>'.
                                            "<td width='4%' class='noExl'>
                                                    <div class='btn margpad'>
                                                        <button type='button' class='btn btn-sm btn-light' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                            <i class='fas fa-ellipsis-v'></i>
                                                        </button>
                                                        <div class='dropdown-menu'>
                                                            <a name='edit-button' class='dropdown-item' data-toggle='modal' data-id='".$id."' data-section='LabelPrinters' data-target=".'"#editModal"'."><i class='mr-1 fas fa-edit'></i>Edit</a>
                                                            <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$sn.",".$location.",".$area.",".$tag.",".$btname.",".$ip."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>";
                                        }
                                        break;
                                    case 'Laser_Printers':   
                                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                        $id = $row['id'];
                                        $brand = $row['Brand'];
                                        $model = $row['Model'];
                                        $sn = $row['SerialNumber'];
                                        $location = $row['Location'];
                                        $area = $row['Area'];
                                        $dtag = $row['DahillTag'];
                                        $hostname= $row['Hostname'];
                                        $ip = $row['IPAddress']; 
                                        echo '<tr>'.
                                            "<td>".$brand."</td>".
                                            "<td>".$model."</td>".
                                            "<td>".$sn."</td>".
                                            "<td>".$location."</td>".
                                            "<td>".$area."</td>".
                                            "<td>".$dtag."</td>".
                                            "<td>".$hostname.'</td>'.
                                            "<td>".$ip.'</td=>'.
                                            "<td width='4%' class='noExl'>
                                                <div class='btn margpad'>
                                                    <button type='button' class='btn btn-sm btn-light' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                        <i class='fas fa-ellipsis-v'></i>
                                                    </button>
                                                    <div class='dropdown-menu'>
                                                    <a name='edit-button' class='dropdown-item' data-toggle='modal' data-id='".$id."' data-section='LaserPrinters' data-target=".'"#editModal"'."><i class='mr-1 fas fa-edit'></i>Edit</a>  
                                                    <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$sn.",".$location.",".$area.",".$dtag.",".$hostname.",".$ip."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>";
                                        }
                                        break;
                                    case "IPS":    
                                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                        $id = $row['id'];
                                        $ip = $row['IP'];
                                        $device = $row['Device'];
                                        $location = $row['Location'];
                                        $area = $row['Area'];
                                        echo "<tr>".
                                            "<td>".$ip."</td>".
                                            "<td>".$device."</td>".
                                            "<td>".$location."</td>".
                                            "<td>".$area."</td>".
                                            "<td width='4%' class='noExl'>
                                            <div class='btn margpad'>
                                                <button type='button' class='btn btn-sm btn-light' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                    <i class='fas fa-ellipsis-v'></i>
                                                </button>
                                                <div class='dropdown-menu'>
                                                    <a name='edit-button' class='dropdown-item' data-toggle='modal' data-id='".$id."' data-section='IPS' data-target=".'"#editModal"'."><i class='mr-1 fas fa-edit'></i>Edit</a>
                                                    <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$ip.",".$device.",".$location.",".$area."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a>
                                                </div>
                                            </div>
                                            </td>
                                        <tr>";
                                        }
                                        break;
                                    default:
                                        break;
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- COMMANDS ENDS -->
    <!-- HEADER TABLE -->

<!-- Modals -->
<?php
#ADD modal
switch($section){
    case 'Desktops':    
        echo ' 
        <!-- Add Modal -->
        <div id="addDesktops" name="add-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Desktops | Add Item</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="inventory/actions/add.php" method="POST" data-data="" class="add-form" id="add-form" data-section="Desktops" data-column="ServiceTag">
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="st" id="st-input" placeholder="Service TAG" required="required">
                            <div id="duplicated-warning"><i class="fas fa-times-circle"></i><h6>This item already exists</h6></div>
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area" required="required">
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="os" id="os" placeholder="OS">
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="specs" id="specs" placeholder="Specs">
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="hostname" id="hostname" placeholder="Hostname">  
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="country" id="country" placeholder="Country">      
                            <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="username" id="username" placeholder="Username">
                            <button type="submit" class="add-btn btn btn-light">Add to Desktops</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ';
        break;
    case 'Laptops':  
        echo'
        <!-- Modal -->
        <div id="addLaptops" name="add-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Laptops | Add Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form action="inventory/actions/add.php" method="POST" data-data="" class="add-form" id="add-form" data-section="Laptops" data-column="ServiceTag">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="st" id="st-input" placeholder="Service TAG" required="required">
                    <div id="duplicated-warning"><i class="fas fa-times-circle"></i><h6>This item already exists</h6></div>
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sso" id="sso" placeholder="SSO" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="uname" id="uname" placeholder="User name" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="udepartment" id="udepartment" placeholder="Department" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="os" id="os" placeholder="OS" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="specs" id="specs" placeholder="Specs" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="hostname" id="hostname" placeholder="Hostname" required="required">          
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="country" id="country" placeholder="Country" required="required">
                    <button type="submit" class="add-btn btn btn-light">Add to Laptops</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        ';  
        break;
    case 'Mobiles': 
        echo'
        <!-- MOBILES Modal -->
        <div id="addMobiles" name="add-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Mobiles | Add Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form action="inventory/actions/add.php" method="POST" data-data="" class="add-form" id="add-form" data-section="Mobiles" data-column="IMEI">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="imei" id="st-input" placeholder="IMEI" required="required">
                    <div id="duplicated-warning"><i class="fas fa-times-circle"></i><h6>This item already exists</h6></div>
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sso" id="sso" placeholder="SSO" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="uname" id="uname" placeholder="User name" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="udepartment" id="udepartment" placeholder="Department" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="color" id="color" placeholder="Color" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="specs" id="specs" placeholder="Specs" required="required"> 
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="number" id="number" placeholder="Tel Number" required="required">
                    <button type="submit" class="add-btn btn btn-light">Add to Mobiles</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        ';   
        break;
    case 'Label_Printers':  
        echo'
        <!-- Modal -->
        <div id="addLabelPrinters" name="add-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Label Printers | Add Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form action="inventory/actions/add.php" method="POST" data-data="" class="add-form" id="add-form" data-section="Label_Printers" data-column="SerialNumber">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sn" id="st-input" placeholder="Serial Numer" required="required">
                    <div id="duplicated-warning"><i class="fas fa-times-circle"></i><h6>This item already exists</h6></div>
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area" required="required">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="tag" id="tag" placeholder="TAG">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="btname" id="btname" placeholder="Bartender Name">
                    <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="ip" id="ip" placeholder="IP Adress">        
                    <button Add type="submit" class="add-btn btn btn-light">Add to Label Printers</button>
                </form>
                </div>
            </div>
            </div>
        </div>
        ';  
        break;
    case 'Laser_Printers':   
        echo'
        <!-- LASER PRINTERS Modal -->
        <div id="addLaserPrinters" name="add-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Laser Printers | Add Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="inventory/actions/add.php" method="POST" data-data="" class="add-form" id="add-form" data-section="Laser_Printers" data-column="SerialNumber">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="brand" id="brand" placeholder="Brand" required="required">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="model" id="model" placeholder="Model" required="required">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="sn" id="st-input" placeholder="Serial Number" required="required">
                        <div id="duplicated-warning"><i class="fas fa-times-circle"></i><h6>This item already exists</h6></div>
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area" required="required">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="dtag" id="dtag" placeholder="DAHILL Tag">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="nname" id="nname" placeholder="Net Name">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="ip" id="ip" placeholder="IP Adress">
                        <button type="submit" class="add-btn btn btn-light">Add to Laser Printers</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        '; 
        break;
    case "IPS":  
        echo'
        <!-- Add Modal -->
        <div id="addIps" name="add-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">IP'."'".'s | Add Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="inventory/actions/add.php" method="POST" data-data="" class="add-form" id="add-form" data-section="IPS" data-column="IP">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="ip" id="st-input" placeholder="IP" required="required" >
                        <div id="duplicated-warning"><i class="fas fa-times-circle"></i><h6>This item already exists</h6></div>
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="device" id="device" placeholder="Device" required="required">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="location" id="location" placeholder="Location" required="required">
                        <input oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="area" id="area" placeholder="Area" required="required">
                        <button type="submit" class="add-btn btn btn-light">Add to IP'."'".'s</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        ';  
        break;
    default:
        break;
}
#Edit Modal
switch($section){
    case 'Desktops':   
        echo '<!-- Edit Modal -->
        <div id="editModal" class="modal fade" role="dialog">
            <div class="modal-dialog" id="editModaldialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Desktops | Edit Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" id="editForm" data-section="'.$section.'" data-id=""></form>
                </div>
            </div>
        </div>';
        break;
    case 'Laptops':    
        echo '<!-- Edit Modal -->
        <div id="editModal" class="modal fade" role="dialog">
                  <div class="modal-dialog" id="editModaldialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">Laptops | Edit Item</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <form action="" id="editForm" data-section="'.$section.'" data-id=""></form>
                      </div>
                  </div>
              </div>';
        break;
    case 'Mobiles':  
        echo '<!-- Edit Modal -->
        <div id="editModal" class="modal fade" role="dialog">
                  <div class="modal-dialog" id="editModaldialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">Mobiles | Edit Item</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <form action="" id="editForm" data-section="'.$section.'" data-id=""></form>
                      </div>
                  </div>
              </div>';  
        break;
    case 'Label_Printers':  
        echo '<!-- Edit Modal -->
        <div id="editModal" class="modal fade" role="dialog">
                  <div class="modal-dialog" id="editModaldialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">Label Printers | Edit Item</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <form action="" id="editForm" data-section="'.$section.'" data-id=""></form>
                      </div>
                  </div>
              </div>';  
        break;
    case 'Laser_Printers':   
        echo '<!-- Edit Modal -->
        <div id="editModal" class="modal fade" role="dialog">
                  <div class="modal-dialog" id="editModaldialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">Laser Printers | Edit Item</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <form action="" id="editForm" data-section="'.$section.'" data-id=""></form>
                      </div>
                  </div>
              </div>'; 
        break;
    case "IPS":    
        echo '<!-- Edit Modal -->
        <div id="editModal" class="modal fade" role="dialog">
                  <div class="modal-dialog" id="editModaldialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">IPS | Edit Item</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <form action="" id="editForm" data-section="'.$section.'" data-id=""></form>
                      </div>
                  </div>
              </div>';
        break;
    default:
	    break;
}
echo"</div>";
#Audit Modal
echo '<!-- Audit Modal -->
<div id="auditModal" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" id="auditModal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Audit '.$section.'</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="auditModal-body">
        </div>
    </div>
</div></div><div id="excel-template-notrendering"></div>';
?>
<div id="excel-template-notrendering"></div>
<script type="text/javascript" src="js/notify.min.js"></script>
<script type="text/javascript" src="inventory/js/search.js"></script>
<script type="text/javascript" src="inventory/js/audit.js"></script>
<script type="text/javascript" src="inventory/js/download-excel.js"></script>
<script type="text/javascript" src="inventory/js/action-add.js"></script>
<script type="text/javascript" src="inventory/js/action-delete.js"></script>
<script type="text/javascript" src="inventory/js/sorting.js"></script>
<script type="text/javascript" src="inventory/js/edit.js"></script>