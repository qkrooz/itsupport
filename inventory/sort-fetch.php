<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_POST['th']) && !empty($_POST['th']) && isset($_POST['section']) && !empty($_POST['section']) && isset($_POST['action']) && !empty($_POST['action'])){
    $th = $_POST['th'];
    $section = $_POST['section'];
    $action = $_POST['action'];
    include '../serverConnection.php';
    include '../authentication.php';
    if($conn){
        switch ($section){
            // SORTING DESKTOP
            case 'Desktops':
                if($action === 'normal'){
                    $sql = "SELECT * FROM Desktops ORDER BY $th";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
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
                                <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$st.",".$location.",".$area.",".$os.",".$specs.",".$hostname.",".$country.",".$username."'><i class='mr-1 fas fa-trash-alt'></i>Delete</alass='dropdown-item'>
                            </div>
                        </div>
                        </td></tr>";
                    }
                }else{
                    $sql = "SELECT * FROM Desktops ORDER BY $th DESC";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
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
                                <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$st.",".$location.",".$area.",".$os.",".$specs.",".$hostname.",".$country.",".$username."'><i class='mr-1 fas fa-trash-alt'></i>Delete</alass='dropdown-item'>
                            </div>
                        </div>
                        </td></tr>";
                    }
                }
                break;
            case 'Laptops':
                if($action === 'normal'){
                    $sql = "SELECT * FROM Laptops ORDER BY $th";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
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
                      $country = $row['Country'];
                      $hostname = $row['Hostname'];
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
                                    <a class='dropdown-item' target = '_blank' href='./pdf/pdf_laptop.php?no=".$row['ServiceTag']."&sso=".$row['SSO']."&user=".$row['UserName']."&dep=".$row['Department']."&brand=".$row['Brand']."&model=".$row['Model']."&specs=".$row['Specs']."''><i class='mr-1 fas fa-file-pdf'></i>Generate PDF</a>
                                    <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$st.",".$sso.",".$username.",".$department.",".$os.",".$specs.",".$country.",".$hostname."'><i class='mr-1 fas fa-trash-alt'></i>Delete</alass='dropdown-item'>
                                </div>
                            </div>
                            </td>
                            </tr>";
                    }
                }else{
                    $sql = "SELECT * FROM Laptops ORDER BY $th DESC";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
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
                        $country = $row['Country'];
                        $hostname = $row['Hostname'];
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
                                    <a class='dropdown-item' target = '_blank' href='./pdf/pdf_laptop.php?no=".$row['ServiceTag']."&sso=".$row['SSO']."&user=".$row['UserName']."&dep=".$row['Department']."&brand=".$row['Brand']."&model=".$row['Model']."&specs=".$row['Specs']."''><i class='mr-1 fas fa-file-pdf'></i>Generate PDF</a>
                                    <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$st.",".$sso.",".$username.",".$department.",".$os.",".$specs.",".$country.",".$hostname."'><i class='mr-1 fas fa-trash-alt'></i>Delete</alass='dropdown-item'>
                                </div>
                            </div>
                            </td>
                            </tr>";
                        }
                    }
                break;
            case 'Mobiles':
                if($action === 'normal'){
                    $sql = "SELECT * FROM Mobiles ORDER BY $th";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    } 
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
                                            <a class='dropdown-item' target = '_blank' href='./pdf/pdf_mobile.php?no=".$row['IMEI']."&sso=".$row['SSO']."&user=".$row['UserName']."&dep=".$row['Department']."&brand=".$row['Brand']."&model=".$row['Model']."&specs=".$row['Specs']."''><i class='mr-1 fas fa-file-pdf'></i>Generate PDF</a>
                                            <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$imei.",".$sso.",".$username.",".$department.",".$color.",".$specs.",".$telnumber."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a>
                                        </div>
                                    </div>
                                    </td>
                                    </tr>";
                    }
                }else{
                    $sql = "SELECT * FROM Mobiles ORDER BY $th DESC";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    } 
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
                                            <a class='dropdown-item' target = '_blank' href='./pdf/pdf_mobile.php?no=".$row['IMEI']."&sso=".$row['SSO']."&user=".$row['UserName']."&dep=".$row['Department']."&brand=".$row['Brand']."&model=".$row['Model']."&specs=".$row['Specs']."''><i class='mr-1 fas fa-file-pdf'></i>Generate PDF</a>
                                            <a class='dropdown-item' data-section=".$section." name='delete-button' data-attribs='".$id.",".$brand.",".$model.",".$imei.",".$sso.",".$username.",".$department.",".$color.",".$specs.",".$telnumber."'><i class='mr-1 fas fa-trash-alt'></i>Delete</a>
                                        </div>
                                    </div>
                                    </td>
                                    </tr>";
                    }                    
                }
                break;
            case 'Label Printers':
                if($action === 'normal'){
                    $sql = "SELECT * FROM Label_Printers ORDER BY $th";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        $id=$row['id'];
                        $brand=$row['Brand'];
                        $model=$row['Model'];
                        $sn=$row['SerialNumber'];
                        $location=$row['Location'];
                        $area=$row['Area'];
                        $tag=$row['Tag'];
                        $btname=$row['BartenderName'];
                        $ip=$row['IPAddress'];
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
                }else{
                    $sql = "SELECT * FROM Label_Printers ORDER BY $th DESC";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        $id=$row['id'];
                        $brand=$row['Brand'];
                        $model=$row['Model'];
                        $sn=$row['SerialNumber'];
                        $location=$row['Location'];
                        $area=$row['Area'];
                        $tag=$row['Tag'];
                        $btname=$row['BartenderName'];
                        $ip=$row['IPAddress'];
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
                }
                break;
            case 'Laser Printers':
                if($action === 'normal'){
                    $sql = "SELECT * FROM Laser_Printers ORDER BY $th";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
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
                }else{
                    $sql = "SELECT * FROM Laser_Printers ORDER BY $th DESC";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
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
                }
                break;
            case 'IPS':
                if($action === 'normal'){
                    $sql = "SELECT * FROM IPS ORDER BY $th";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        $id = $row['id'];
                        $ip = $row['IP'];
                        $device = $row['Device'];
                        $location = $row['Location'];
                        $area= $row['Area'];
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
                              // "<td width='4%'> <a target='edit-modal-content' href='../connection/edit/forms/editformlaserprinters.php?id=".$id."&brand=".$brand."&model=".$model."&sn=".$sn."&location=".$location."&area=".$area."&dtag=".$dtag."&hostname=".$hostname."&ip=".$ip."'><button name='editbutton' type='submit' id='btn-Edit'><img src='../img/edit-icon.png' alt='edit-icon'/></button></a></td>".
                              // "<td width='4%'> <a href='../connection/delete/deleteLaserPrinters.php?user=".$GEuser."&id=".$id."&brand=".$brand."&model=".$model."&sn=".$sn."&location=".$location."&area=".$area."&dtag=".$dtag."&nname=".$hostname."&ip=".$ip."'><button type='submit' id='btn-Delete'><img src='../img/delete-icon.png' alt='delete-icon'/></button></a></td></tr>";
                        }
                }else{
                    $sql = "SELECT * FROM IPS ORDER BY $th DESC";
                    $stmt = sqlsrv_query($conn,$sql);
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        $id = $row['id'];
                        $ip = $row['IP'];
                        $device = $row['Device'];
                        $location = $row['Location'];
                        $area= $row['Area'];
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
                              // "<td width='4%'> <a target='edit-modal-content' href='../connection/edit/forms/editformlaserprinters.php?id=".$id."&brand=".$brand."&model=".$model."&sn=".$sn."&location=".$location."&area=".$area."&dtag=".$dtag."&hostname=".$hostname."&ip=".$ip."'><button name='editbutton' type='submit' id='btn-Edit'><img src='../img/edit-icon.png' alt='edit-icon'/></button></a></td>".
                              // "<td width='4%'> <a href='../connection/delete/deleteLaserPrinters.php?user=".$GEuser."&id=".$id."&brand=".$brand."&model=".$model."&sn=".$sn."&location=".$location."&area=".$area."&dtag=".$dtag."&nname=".$hostname."&ip=".$ip."'><button type='submit' id='btn-Delete'><img src='../img/delete-icon.png' alt='delete-icon'/></button></a></td></tr>";
                        }
                }
                break;
            default:
                break;
        }
    }
}
?>
