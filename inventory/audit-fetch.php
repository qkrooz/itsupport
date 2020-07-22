<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include '../serverConnection.php';
include '../authentication.php';
$section = $_POST['section'];
switch($section){
    case 'Label Printers':
        $section = 'Label_Printers';
    break;
    case 'Laser Printers':
        $section = 'Laser_Printers';
    break;
    case "Reserved IP's":
        $section = 'IPS';
    break;
    default:
        break;
}
if($conn){
    $sql = "SELECT TOP 10 * FROM $section ORDER BY NEWID()";
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query($conn,$sql, $params, $options);
    // Table Header
    echo '<div id="audit-table"><div class="table-header"><table id="audit-table-header"><thead><tr>';
    switch($section){
        case 'Desktops':
            echo '<th>Brand</th>
                    <th>Model</th>
                    <th>Service Tag</th>
                    <th>Location</th>
                    <th>Area</th>
                    <th>OS</th>
                    <th>Specs</th>
                    <th>Audited</th>
                    <th>Comments</th>
                </tr></thead></table></div>'; 
            // Body Table
            echo '<div class="audit-table-body"><table id="audit-table-content"><tbody>';
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {   
                $id = $row['id'];
                $brand = $row['Brand'];
                $model = $row['Model'];
                $st = $row['ServiceTag'];
                $location = $row['Location'];
                $area = $row['Area'];
                $os = $row['OS'];
                $specs = $row['Specs'];

                echo "<tr><td>".$brand."</td>".
                "<td>".$model."</td>".
                "<td>".$st."</td>".
                "<td>".$location."</td>".
                "<td>".$area."</td>".
                "<td>".$os."</td>".
                "<td>".$specs.'</td>'.
                '<td></td>'.
                '<td></td>';
                echo '</tr>';
            }   
            echo '</tbody></table></div>';
            break;
        case 'Laptops':  
            echo '  <th>Brand</th>
                    <th>Model</th>
                    <th>Service Tag</th>
                    <th>SSO</th>
                    <th>User name</th>
                    <th>Department</th>
                    <th>Os</th>
                    <th>Specs</th>
                    <th>Audited</th>
                    <th>Comments</th>
                    </tr></thead></table></div>'; 
                                // Body Table
            echo '<div class="audit-table-body"><table id="audit-table-content"><tbody>';
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

                echo "<tr><td>".$brand."</td>".
                "<td>".$model."</td>".
                "<td>".$st."</td>".
                "<td>".$sso."</td>".
                "<td>".$username."</td>".
                "<td>".$department."</td>".
                "<td>".$os.'</td>'.
                "<td>".$specs.'</td>'.
                '<td></td>'.
                '<td></td>';
                echo '</tr>';
            }    
            echo '</tbody></table></div>';
            break;
        case 'Mobiles': 
            echo '  <th>Brand</th>
                    <th>Model</th>
                    <th>IMEI</th>
                    <th>SSO</th>
                    <th>User name</th>
                    <th>Department</th>
                    <th>Color</th>
                    <th>Specs</th>
                    <th>Tel Number</th>
                    <th>Audited</th>
                    <th>Comments</th>
                    </tr></thead></table></div>';   
                                // Body Table
            echo '<div class="audit-table-body"><table id="audit-table-content"><tbody>'; 
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                $brand = $row['Brand'];
                $model = $row['Model'];
                $imei = $row['IMEI'];
                $sso = $row['SSO'];
                $username = $row['UserName'];
                $department = $row['Department'];
                $color = $row['Color'];
                $specs = $row['Specs'];
                $tel = $row['TelNumber'];
                echo "<tr><td>".$brand."</td>".
                    "<td>".$model."</td>".
                    "<td>".$imei."</td>".
                    "<td>".$sso."</td>".
                    "<td>".$username."</td>".
                    "<td>".$department."</td>".
                    "<td>".$color.'</td>'.
                    "<td>".$specs."</td>".
                    "<td>".$tel."</td>". 
                    '<td></td>'.
                    '<td></td>';
                echo '</tr>';
             }
            echo '</tbody></table></div>'; 
            break;
        case 'Label_Printers':  
            echo '  <th>Brand</th>
                    <th>Model</th>
                    <th>Serial Number</th>
                    <th>Location</th>
                    <th>Area</th>
                    <th>Tag</th>
                    <th>Bartender Name</th>
                    <th>IP Adress</th>
                    <th>Audited</th>
                    <th>Comments</th>
                    </tr></thead></table></div>';  
                                // Body Table
            echo '<div class="audit-table-body"><table id="audit-table-content"><tbody>';  
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                $brand = $row['Brand'];
                $model = $row['Model'];
                $sn = $row['SerialNumber'];
                $location = $row['Location'];
                $area = $row['Area'];
                $tag = $row['Tag'];
                $netname = $row['BartenderName'];
                $ip = $row['IPAddress'];
                echo "<tr><td>".$brand."</td>".
                            "<td>".$model."</td>".
                            "<td>".$sn."</td>".
                            "<td>".$location."</td>".
                            "<td>".$area."</td>".
                            "<td>".$tag."</td>".
                            "<td>".$netname."</td>".
                            "<td>".$ip.'</td>'. 
                            '<td></td>'.
                            '<td></td>';
                echo '</tr>';
             }
            echo '</tbody></table></div>';
            break;
        case 'Laser_Printers':  
            echo '  <th>Brand</th>
                    <th>Model</th>
                    <th>Serial Number</th>
                    <th>Location</th>
                    <th>Area</th>
                    <th>Dahill Tag</th>
                    <th>network Name</th>
                    <th>IP Adress</th>
                    <th>Audited</th>
                    <th>Comments</th>
                    </tr></thead></table></div>';    
                                // Body Table
            echo '<div class="audit-table-body"><table id="audit-table-content"><tbody>'; 
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                $brand = $row['Brand'];
                $model = $row['Model'];
                $sn = $row['SerialNumber'];
                $location = $row['Location'];
                $area = $row['Area'];
                $tag = $row['DahillTag'];
                $netname = $row['Hostname'];
                $ip = $row['IPAddress'];
                echo "<tr><td>".$brand."</td>".
                            "<td>".$model."</td>".
                            "<td>".$sn."</td>".
                            "<td>".$location."</td>".
                            "<td>".$area."</td>".
                            "<td>".$tag."</td>".
                            "<td>".$netname."</td>".
                            "<td>".$ip.'</td>'. 
                            '<td></td>'.
                            '<td></td>';
                echo '</tr>';
            }
            echo '</tbody></table></div>';
            break;
        case "IPS":   
            echo '  <th>IP</th>
                    <th>Device</th>
                    <th>Location</th>
                    <th>Area</th>
                    <th>Audited</th>
                    <th>Comments</th>
                    </tr></thead></table></div>';  
                                // Body Table
            echo '<div class="audit-table-body"><table id="audit-table-content"><tbody>';
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                $ip = $row['IP'];
                $device = $row['Device'];
                $location = $row['Location'];
                $area = $row['Area'];
                echo "<tr><td>".$ip."</td>".
                            "<td>".$device."</td>".
                            "<td>".$location."</td>".
                            "<td>".$area."</td>". 
                            '<td></td>'.
                            '<td></td>';
                echo '</tr>';
             }
            echo '</tbody></table></div></div>';
            break;
        default:
            break;
    }
    echo '</div>
    <div id="content-audit-canvas"></div>
    <div class="audit-buttons">
    <a data-audit="'.$section.'" type="button" class="audit-command-btn" id="random-again"><i class="mr-1 fas fa-random"></i>Randomize Again</a>
    <a type="button" class="audit-command-btn" id="download-excel" data-section="'.$section.'"><i class="mr-1 fas fa-file-excel"></i>Download</a>
    </div>
    ';
    // echo '<div id="pdf-test"><h1>Hola mundirijillo</h1></div>' ;
    echo'
        <script type="text/javascript" src="./inventory/js/audit-randomize-again.js"></script>
        <script type="text/javascript" src="./inventory/js/download-excel.js"></script>';
}
?>