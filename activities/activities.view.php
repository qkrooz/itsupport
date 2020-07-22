<?php 
if(!isset($_SESSION)) { 
    session_start(); 
}
?>
<div class="row sites-row margpad w-100">
    <div class="col-12 margpad w-100 section-master-col">
        <div class="row sites-header align-items-baseline margpad sticky-top bg-white shadow-sm">
                    <i class="fas fa-fas fa-snowboarding mt-2 ml-2"></i><h4 class="ml-1 mt-2">Activities</h4>
        </div>
        <div class="row master-row margpad d-flex flex-lg-row flex-sm-column justify-content-center align-self-center">
            <div class="col-sm-12 col-lg-1 margpad activities-commands border-right d-flex flex-lg-column flex-sm-row justify-content-start align-items-center">
                <a href="#" class="btn btn-primary btn-lg rounded-circle mb-2 mt-2 border"><i class="fas fa-fas fa-plus"></i></a>
            </div>
            <div class="col margpad activities-content-col h-100 shadow">
                
            </div>
        </div>
    </div>
</div>