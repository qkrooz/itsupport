<?php 
if(!isset($_SESSION)) { 
    session_start(); 
}
?>
<div class="row miscellaneous-row margpad h-100">
    <div class="col-12 margpad">
        <div class="row sites-header shadow-sm align-items-baseline margpad sticky-top bg-white">
            <i class="fas fa-mouse mt-2 ml-2"></i><h4 class="ml-1 mt-2">Miscellaneous</h4>
        </div>
        <div class="row margpad miscellaneous-contentmaster">
            <div class="col-1 margpad miscellaneous-navigation nav flex-column nav-pills" id="m-sections" role="tablist" aria-orientation="vertical">
                <!-- <a name="m-quickout-button" data-m-category="Dashboard" class="nav-link" id="v-pills-dash-tab" data-toggle="pill" href="#m-dash" role="tab" aria-controls="m-dash" aria-selected="flase">Quick Out</a> -->
                <a name="m-category-button" data-m-category="Mouses" class="nav-link active" id="v-pills-mouses-tab" data-toggle="pill" href="#m-mouses" role="tab" aria-controls="m-mouses" aria-selected="true">Mouses</a>
                <a name="m-category-button" data-m-category="Keyboards" class="nav-link" id="v-pills-keyboards-tab" data-toggle="pill" href="#m-keyboards" role="tab" aria-controls="m-keyboards" aria-selected="false">Keyboards</a>
                <a name="m-category-button" data-m-category="Webcams" class="nav-link" id="v-pills-webcams-tab" data-toggle="pill" href="#m-webcams" role="tab" aria-controls="m-webcams" aria-selected="false">Webcams</a>
                <a name="m-category-button" data-m-category="Monitors" class="nav-link" id="v-pills-monitors-tab" data-toggle="pill" href="#m-monitors" role="tab" aria-controls="m-monitors" aria-selected="false">Monitors</a>
                <a name="m-category-button" data-m-category="Toners" class="nav-link" id="v-pills-toners-tab" data-toggle="pill" href="#m-toners" role="tab" aria-controls="m-toners" aria-selected="false">Toners</a>
                <a name="m-category-button" data-m-category="Videocables" class="nav-link" id="v-pills-videocables-tab" data-toggle="pill" href="#m-videocables" role="tab" aria-controls="m-videocables" aria-selected="false">Video Cables</a>
                <a name="m-category-button" data-m-category="Netcables" class="nav-link" id="v-pills-netcables-tab" data-toggle="pill" href="#m-netcables" role="tab" aria-controls="m-netcables" aria-selected="false">Net Cables</a>
                <a name="m-category-button" data-m-category="Adapters" class="nav-link" id="v-pills-adapters-tab" data-toggle="pill" href="#m-adapters" role="tab" aria-controls="m-adapters" aria-selected="false">Adapters</a>
                <a name="m-category-button" data-m-category="Projectors" class="nav-link" id="v-pills-projectors-tab" data-toggle="pill" href="#m-projectors" role="tab" aria-controls="m-projectors" aria-selected="false">Projectors</a>
                <a name="m-category-button" data-m-category="Scanners" class="nav-link" id="v-pills-scanners-tab" data-toggle="pill" href="#m-scanners" role="tab" aria-controls="m-scanners" aria-selected="false">Scanners</a>
            </div>
            <div class="tab-content col margpad" id="v-pills-tabContent">
                <!-- <div class="h-100 tab-pane fade show active" id="m-dash" role="tabpanel" aria-labelledby="v-pills-home-tab"></div> -->
                <div class="h-100 tab-pane fade show active" id="m-mouses" role="tabpanel" aria-labelledby="v-pills-mouses-tab"></div>
                <div class="tab-pane fade" id="m-keyboards" role="tabpanel" aria-labelledby="v-pills-keyboards-tab"></div>
                <div class="tab-pane fade" id="m-webcams" role="tabpanel" aria-labelledby="v-pills-webcams-tab"></div>
                <div class="tab-pane fade" id="m-monitors" role="tabpanel" aria-labelledby="v-pills-monitors-tab"></div>
                <div class="tab-pane fade" id="m-toners" role="tabpanel" aria-labelledby="v-pills-toners-tab"></div>
                <div class="tab-pane fade" id="m-videocables" role="tabpanel" aria-labelledby="v-pills-videocables-tab"></div>
                <div class="tab-pane fade" id="m-netcables" role="tabpanel" aria-labelledby="v-pills-netcables-tab"></div>
                <div class="tab-pane fade" id="m-adapters" role="tabpanel" aria-labelledby="v-pills-adapters-tab"></div>
                <div class="tab-pane fade" id="m-projectors" role="tabpanel" aria-labelledby="v-pills-projectors-tab"></div>
                <div class="tab-pane fade" id="m-scanners" role="tabpanel" aria-labelledby="v-pills-scanners-tab"></div>
            </div>
        </div>
    </div>
</div>
<script src="miscellaneous/js/load-content.js"></script>
