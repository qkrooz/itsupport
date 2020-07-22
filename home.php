<?php 
if(!isset($_SESSION)) { 
    session_start(); 
} 
include 'version.php';
include 'authentication.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view.fonts.css">
    <script defer src="resources/fontawesome/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/view.main.css">
    <link rel="stylesheet" href="css/view.inventory.css">
    <link rel="stylesheet" href="css/view.tables.css">
    <link rel="stylesheet" href="css/jquery-confirm.css">
    <link rel="stylesheet" href="css/view.sites.css">
    <link rel="stylesheet" href="css/view.miscellaneous.css">
    <link rel="stylesheet" href="css/view.activities.css">
    <link rel="shortcut icon" href="img/gelogo.png"/>
    <title>IT Support</title>
</head>
<body>
    <div class="container-fluid h-100 w-100">
        <div class="row h-100">
            <nav class="col h-100 w-100 p-0 border-right d-flex flex-column">
                <div class="page-info">
                    <div class="ge-info d-flex flex-row align-items-center justify-content-start p-1">
                        <img src="img/gelogocolor.png" alt="" class="mr-2">
                        <h5 class="text-light m-0 d-h6">IT Support</h5>
                    </div>
                    <a href="https://my.ge.com" class="a-user-info" target='blank'>
                        <div class="user-info d-flex flex-row align-items-center justify-content-start p-1 bg-light border-bottom">
                            <div class="mr-2">
                                <img src=<?php echo $loguserpic;?> alt="user-image">
                            </div>
                            <div>
                                <p class="m-0 username"><?php echo $loguser;?></p>
                                <p class="m-0 sso"><?php echo $sso;?></p>
                            </div>
                        </div></a>                  
                </div>
                <div id="nav-tab" role="tablist" class=" flex-grow-1 nav d-flex justify-content-between flex-column p-0 pt-3 pt-sm-0 pb-3 pb-sm-0">
                    <div class="links-section d-flex flex-column justify-content-between pt-lg-3 pb-lg-3 pt-sm-0 pb-sm-0 flex-grow-1 border-bottom">
                        <a class="p-2 pl-3 d-flex flex-row align-items-center justify-content-start nav-item nav-link unfinished" data-toggle="tab" role="tab" aria-controls="nav-dashboard" aria-selected="true"
                        id="nav-dashboard-tab" href="#dashboard"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start" data-toggle="tab" role="tab" aria-controls="nav-sites" aria-selected="true"
                        id="nav-sites-tab" href="#sites"><i class="fas mr-2 fa-globe-americas"></i>Sites</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-tickets" aria-selected="true"
                        id="nav-tickets-tab" href="#tickets"><i class="fas mr-2 fa-tasks"></i>Tickets</a>                       
                    </div>
                    <div class="links-section d-flex flex-column justify-content-between pt-lg-3 pb-lg-3 pt-sm-0 pb-sm-0 flex-grow-1 border-bottom">
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start active" data-toggle="tab" role="tab" aria-controls="nav-inventory" aria-selected="true"
                        id="nav-inventory-tab" href="#inventory"><i class="fas mr-2 fa-clipboard"></i>Inventory</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-miscellaneous" aria-selected="true"
                        id="nav-miscellaneous-tab" href="#miscellaneous"><i class="fas mr-2 fa-th-large"></i>Miscellaneous</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-logs" aria-selected="true"
                        id="nav-logs-tab" href="#logs"><i class="fas mr-2 fa-history"></i>Logs</a>                    
                    </div>
                    <div class="links-section d-flex flex-column justify-content-between pt-lg-3 pb-lg-3 pt-sm-0 pb-sm-0 flex-grow-1 border-bottom">
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-calendar" aria-selected="true"
                        id="nav-calendar-tab" href="#calender"><i class="fas mr-2 fa-calendar"></i>Calendar</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-docs" aria-selected="true"
                        id="nav-docs-tab" href="#docs"><i class="fas mr-2 fa-folder"></i>Docs</a>    
                    </div>
                    <div class="links-section d-flex flex-column justify-content-between pt-lg-3 pb-lg-3 pt-sm-0 pb-sm-0 flex-grow-1 border-bottom">
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-activities" aria-selected="true"
                        id="nav-activities-tab" href="#activities"><i class="fas mr-2 fa-snowboarding"></i>Activities</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-stadistics" aria-selected="true"
                        id="nav-stadistics-tab" href="#stadistics"><i class="fas mr-2 fa-chart-line"></i>Stadistics</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-training" aria-selected="true"
                        id="nav-training-tab" href="#training"><i class="fas mr-2 fa-graduation-cap"></i>Training</a>
                        
                    </div>
                    <div class="links-section d-flex flex-column justify-content-between pt-lg-3 pb-lg-3 pt-sm-0 pb-sm-0 flex-grow-1">
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-data" aria-selected="true"
                        id="nav-data-tab" href="#data"><i class="fas mr-2 fa-key"></i>Data</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-users" aria-selected="true"
                        id="nav-users-tab" href="#users"><i class="fas mr-2 fa-user"></i>Users</a>
                        <a class="about-button p-2 pl-3 d-flex flex-row align-items-center justify-content-start" data-toggle="modal" href="#aboutModal"><i class="fas mr-2 fa-question-circle"></i>About</a>
                        <a class="nav-item nav-link p-2 pl-3 d-flex flex-row align-items-center justify-content-start unfinished" data-toggle="tab" role="tab" aria-controls="nav-config" aria-selected="true"
                        id="nav-config-tab" href="#config"><i class="fas mr-2 fa-cogs"></i>Config</a>
                   
                    </div>
                </div>
            </nav>
            <main class="tab-content flex-grow-1 col" id="nav-tabContent">
                <div id="dashboard" class="tab-pane row h-100 fade" style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-dashboard"></div>
                <div id="sites" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-sites"></div>
                <div id="tickets" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-tickets"></div>
                <div id="inventory" class="tab-pane row h-100 fade show active"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-inventory"></div>
                <div id="miscellaneous" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-miscellaneous"></div>
                <div id="logs" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-logs"></div>
                <div id="calendar" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-calendar"></div>
                <div id="docs" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-docs"></div>
                <div id="activities" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-activities"></div>
                <div id="stadistics" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-stadistics"></div>
                <div id="training" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-training"></div>
                <div id="data" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-data"></div>
                <div id="users" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-users"></div>
                <div id="about" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-about"></div>
                <div id="config" class="tab-pane row h-100 fade"  style="margin:0 !important;" role="tabpanel" aria-labelledby="nav-config"></div>
            </main>
        </div>
    </div>
    <!-- MODALS -->
        <!-- ABOUT MODAL -->
    <div class="modal" tabindex="-1" role="dialog" id="aboutModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">About this App</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Version: <?php echo $version;?></h6>
                <h6>Last Update: <?php echo $lastupdate;?></h6>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/showcontent.js"></script>
    <script type="text/javascript" src="inventory/js/jquery.table2excel.min.js"></script>
    <script type="text/javascript" src="js/jquery-confirm.js"></script>
    <script type="text/javascript" src="js/notify.min.js"></script>
    <script type="text/javascript" src="js/force-tabs.js"></script>
    <script type="text/javascript" src="js/preventclick.js"></script>
    
</body>
</html>
