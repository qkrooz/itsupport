<?php 
if(!isset($_SESSION)) { 
    session_start(); 
}
?>
<div class="col h-100 d-flex flex-column p-0">
<div class="row sites-header align-items-baseline sticky-top bg-gedark shadow-sm p-2 animated fadeIn d-flex align-items-center">
        <i class="fas fa-clipboard-list mr-2  text-light"></i><h4 class="m-0 text-light">Inventory</h4>
    </div>
    <div class="row inventory-master-row">
        <div class="col-12 inventory-master-col">
            <div class="row selector-row d-flex">
                <select class="custom-select shadow-sm animated fadeIn" id="category-select">
                    <option value="Desktops">Desktops</option>
                    <option value="Laptops">Laptops</option>
                    <option value="Mobiles">Mobiles</option>
                    <option value="Label_Printers">Label Printers</option>
                    <option value="Laser_Printers">Laser Printers</option>
                    <option value="IPS">Reserved Ip's</option>
                </select>  
                <button id="btn-reload" class="animated fadeIn shadow-sm btn btn-light border ml-3" data-section="">
                    <i class="fas fa-redo-alt"></i>
                </button>     
                <div id="inventory-loader" class="spinner-border align-self-baseline mt-2" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div class="row d-flex" id="fetched-content"></div>
        </div>
    </div>
</div>
    




    


<script type="text/javascript" src="inventory/js/inventory-fetch-content.js"></script>
<script type="text/javascript" src="inventory/js/action-reload.js"></script>
