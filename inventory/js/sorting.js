$(document).ready(function() {
  //Desktop variables
  var actionbranddesktops = "normal";
  var actionmodeldesktops = "normal";
  var actionstdesktops = "normal";
  var actionlocationdesktops = "normal";
  var actionareadesktops = "normal";
  var actionosdesktops = "normal";
  var actionspecsdesktops = "normal";
  var actionhostnamedesktops = "normal";
  var actioncountrydesktops = "normal";
  var actionusernamedesktops = "normal";
  //Laptops variables
  var actionbrandlaptops = "normal";
  var actionmodellaptops = "normal";
  var actionstlaptops = "normal";
  var actionssolaptops = "normal";
  var actionusernamelaptops = "normal";
  var actiondepartmentlaptops = "normal";
  var actionoslaptops = "normal";
  var actionspecslaptops = "normal";
  var actioncountrylaptops = "normal";
  var actionhostnamelaptops = "normal";
  //Mobiles variables
  var actionbrandmobiles = "normal";
  var actionmodelmobiles = "normal";
  var actionimeimobiles = "normal";
  var actionssomobiles = "normal";
  var actionusernamemobiles = "normal";
  var actiondepartmentmobiles = "normal";
  var actioncolormobiles = "normal";
  var actionspecsmobiles = "normal";
  var actiontelnumbermobiles = "normal";
  //Label Printers variables
  var actionbrandlabelprinters = "normal";
  var actionmodellabelprinters = "normal";
  var actionsnlabelprinters = "normal";
  var actionlocationlabelprinters = "normal";
  var actionarealabelprinters = "normal";
  var actiontaglabelprinters = "normal";
  var actionbtnamelabelprinters = "normal";
  var actioniplabelprinters = "normal";
  // Laser Printers variables
  var actionbrandlaserprinters = "normal";
  var actionmodellaserprinters = "normal";
  var actionsnlaserprinters = "normal";
  var actionlocationlaserprinters = "normal";
  var actionarealaserprinters = "normal";
  var actiondtaglaserprinters = "normal";
  var actionnetnamelaserprinters = "normal";
  var actioniplaserprinters = "normal";
  //Reserved IPS
  var actionipips = "normal";
  var actiondeviceips = "normal";
  var actionlocationips = "normal";
  var actionareaips = "normal";
  //Desktops triggers
  $("a[name=sort-brand-desktops]").click(function(
    url,
    th = "Brand",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionbranddesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionbranddesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionbranddesktops = "normal";
        break;
    }
  });
  $("a[name=sort-model-desktops]").click(function(
    url,
    th = "Model",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionmodeldesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionmodeldesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionmodeldesktops = "normal";
        break;
    }
  });
  $("a[name=sort-st-desktops]").click(function(
    url,
    th = "ServiceTag",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionstdesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionstdesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionstdesktops = "normal";
        break;
    }
  });
  $("a[name=sort-loc-desktops]").click(function(
    url,
    th = "Location",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionlocationdesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionlocationdesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionlocationdesktops = "normal";
        break;
    }
  });
  $("a[name=sort-area-desktops]").click(function(
    url,
    th = "Area",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionareadesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionareadesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionareadesktops = "normal";
        break;
    }
  });
  $("a[name=sort-os-desktops]").click(function(
    url,
    th = "OS",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionosdesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionosdesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionosdesktops = "normal";
        break;
    }
  });
  $("a[name=sort-specs-desktops]").click(function(
    url,
    th = "Specs",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionspecsdesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionspecsdesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionspecsdesktops = "normal";
        break;
    }
  });
  $("a[name=sort-hostname-desktops]").click(function(
    url,
    th = "Hostname",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionhostnamedesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionhostnamedesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionhostnamedesktops = "normal";
        break;
    }
  });
  $("a[name=sort-country-desktops]").click(function(
    url,
    th = "Country",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actioncountrydesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actioncountrydesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actioncountrydesktops = "normal";
        break;
    }
  });
  $("a[name=sort-username-desktops]").click(function(
    url,
    th = "Username",
    section = "Desktops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionusernamedesktops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionusernamedesktops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionusernamedesktops = "normal";
        break;
    }
  });
  //Laptops triggers
  $("a[name=sort-brand-laptops]").click(function(
    url,
    th = "Brand",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionbrandlaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionbrandlaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionbrandlaptops = "normal";
        break;
    }
  });
  $("a[name=sort-model-laptops]").click(function(
    url,
    th = "Model",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionmodellaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionmodellaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionmodellaptops = "normal";
        break;
    }
  });
  $("a[name=sort-st-laptops]").click(function(
    url,
    th = "ServiceTag",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionstlaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionstlaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionstlaptops = "normal";
        break;
    }
  });
  $("a[name=sort-sso-laptops]").click(function(
    url,
    th = "SSO",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionssolaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionssolaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionssolaptops = "normal";
        break;
    }
  });
  $("a[name=sort-username-laptops]").click(function(
    url,
    th = "UserName",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionusernamelaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionusernamelaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionusernamelaptops = "normal";
        break;
    }
  });
  $("a[name=sort-department-laptops]").click(function(
    url,
    th = "Department",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actiondepartmentlaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actiondepartmentlaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actiondepartmentlaptops = "normal";
        break;
    }
  });
  $("a[name=sort-os-laptops]").click(function(
    url,
    th = "OS",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionoslaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionoslaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionoslaptops = "normal";
        break;
    }
  });
  $("a[name=sort-specs-laptops]").click(function(
    url,
    th = "Specs",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionspecslaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionspecslaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionspecslaptops = "normal";
        break;
    }
  });
  $("a[name=sort-country-laptops]").click(function(
    url,
    th = "Country",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actioncountrylaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actioncountrylaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actioncountrylaptops = "normal";
        break;
    }
  });
  $("a[name=sort-hostname-laptops]").click(function(
    url,
    th = "Hostname",
    section = "Laptops"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionhostnamelaptops) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionhostnamelaptops = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionhostnamelaptops = "normal";
        break;
    }
  });
  //Mobiles triggers
  $("a[name=sort-brand-mobiles]").click(function(
    url,
    th = "Brand",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionbrandmobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionbrandmobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionbrandmobiles = "normal";
        break;
    }
  });
  $("a[name=sort-model-mobiles]").click(function(
    url,
    th = "Model",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionmodelmobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionmodelmobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionmodelmobiles = "normal";
        break;
    }
  });
  $("a[name=sort-imei-mobiles]").click(function(
    url,
    th = "IMEI",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionimeimobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionimeimobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionimeimobiles = "normal";
        break;
    }
  });
  $("a[name=sort-sso-mobiles]").click(function(
    url,
    th = "SSO",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionssomobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionssomobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionssomobiles = "normal";
        break;
    }
  });
  $("a[name=sort-username-mobiles]").click(function(
    url,
    th = "UserName",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionusernamemobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionusernamemobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionusernamemobiles = "normal";
        break;
    }
  });
  $("a[name=sort-department-mobiles]").click(function(
    url,
    th = "Department",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actiondepartmentmobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actiondepartmentmobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actiondepartmentmobiles = "normal";
        break;
    }
  });
  $("a[name=sort-color-mobiles]").click(function(
    url,
    th = "Color",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actioncolormobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actioncolormobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actioncolormobiles = "normal";
        break;
    }
  });
  $("a[name=sort-specs-mobiles]").click(function(
    url,
    th = "Specs",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionspecsmobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionspecsmobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionspecsmobiles = "normal";
        break;
    }
  });
  $("a[name=sort-telnumber-mobiles]").click(function(
    url,
    th = "TelNumber",
    section = "Mobiles"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actiontelnumbermobiles) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actiontelnumbermobiles = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actiontelnumbermobiles = "normal";
        break;
    }
  });
  //Label Printers triggers
  $("a[name=sort-brand-labelprinters]").click(function(
    url,
    th = "Brand",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionbrandlabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionbrandlabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionbrandlabelprinters = "normal";
        break;
    }
  });
  $("a[name=sort-model-labelprinters]").click(function(
    url,
    th = "Model",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionmodellabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionmodellabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionmodellabelprinters = "normal";
        break;
    }
  });
  $("a[name=sort-sn-labelprinters]").click(function(
    url,
    th = "SerialNumber",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionsnlabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionsnlabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionsnlabelprinters = "normal";
        break;
    }
  });
  $("a[name=sort-location-labelprinters]").click(function(
    url,
    th = "Location",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionlocationlabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionlocationlabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionlocationlabelprinters = "normal";
        break;
    }
  });
  $("a[name=sort-area-labelprinters]").click(function(
    url,
    th = "Area",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionarealabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionarealabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionarealabelprinters = "normal";
        break;
    }
  });
  $("a[name=sort-tag-labelprinters]").click(function(
    url,
    th = "Tag",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actiontaglabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actiontaglabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actiontaglabelprinters = "normal";
        break;
    }
  });
  $("a[name=sort-btname-labelprinters]").click(function(
    url,
    th = "BartenderName",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionbtnamelabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionbtnamelabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionbtnamelabelprinters = "normal";
        break;
    }
  });
  $("a[name=sort-ip-labelprinters]").click(function(
    url,
    th = "IPAddress",
    section = "Label Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actioniplabelprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actioniplabelprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actioniplabelprinters = "normal";
        break;
    }
  });
  //Laser Printers triggers
  $("a[name=sort-brand-laserprinters]").click(function(
    url,
    th = "Brand",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionbrandlaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionbrandlaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionbrandlaserprinters = "normal";
        break;
    }
  });
  $("a[name=sort-model-laserprinters]").click(function(
    url,
    th = "Model",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionmodellaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionmodellaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionmodellaserprinters = "normal";
        break;
    }
  });
  $("a[name=sort-sn-laserprinters]").click(function(
    url,
    th = "SerialNumber",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionsnlaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionsnlaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionsnlaserprinters = "normal";
        break;
    }
  });
  $("a[name=sort-location-laserprinters]").click(function(
    url,
    th = "Location",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionlocationlaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionlocationlaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionlocationlaserprinters = "normal";
        break;
    }
  });
  $("a[name=sort-area-laserprinters]").click(function(
    url,
    th = "Area",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionarealaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionarealaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionarealaserprinters = "normal";
        break;
    }
  });
  $("a[name=sort-dtag-laserprinters]").click(function(
    url,
    th = "DahillTag",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actiondtaglaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actiondtaglaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actiondtaglaserprinters = "normal";
        break;
    }
  });
  $("a[name=sort-netname-laserprinters]").click(function(
    url,
    th = "Hostname",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionnetnamelaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionnetnamelaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionnetnamelaserprinters = "normal";
        break;
    }
  });
  $("a[name=sort-ip-laserprinters]").click(function(
    url,
    th = "IPAddress",
    section = "Laser Printers"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actioniplaserprinters) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actioniplaserprinters = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actioniplaserprinters = "normal";
        break;
    }
  });
  //Reserved IPS triggers
  $("a[name=sort-ip-ips]").click(function(url, th = "IP", section = "IPS") {
    var url = "inventory/sort-fetch.php";
    switch (actionipips) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionipips = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionipips = "normal";
        break;
    }
  });
  $("a[name=sort-device-ips]").click(function(
    url,
    th = "Device",
    section = "IPS"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actiondeviceips) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actiondeviceips = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actiondeviceips = "normal";
        break;
    }
  });
  $("a[name=sort-location-ips]").click(function(
    url,
    th = "Location",
    section = "IPS"
  ) {
    var url = "inventory/sort-fetch.php";
    switch (actionlocationips) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionlocationips = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionlocationips = "normal";
        break;
    }
  });
  $("a[name=sort-area-ips]").click(function(url, th = "Area", section = "IPS") {
    var url = "inventory/sort-fetch.php";
    switch (actionareaips) {
      case "normal":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "normal"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-down'></i>");
        actionareaips = "desc";
        break;
      case "desc":
        $.ajax({
          url: url,
          data: {
            th: th,
            section: section,
            action: "desc"
          },
          type: "post",
          beforeSend: function() {
            $("#inventory-loader").show();
          },
          success: function(data) {
            $("#tbody-content-table").html(data);
            $("#inventory-loader").hide();
          },
          error: function(data) {
            alert("error");
          }
        });
        $(".sort-icon").empty();
        $(".sort-icon").append("<i class='fas fa-sort'></i>");
        $(".sort-icon", this).empty();
        $(".sort-icon", this).append("<i class='fas fa-sort-up'></i>");
        actionareaips = "normal";
        break;
    }
  });
});
