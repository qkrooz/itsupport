$(document).ready(function() {
  urlfetch = "inventory/fetch-Master.php";
  function loadCategory(url, section) {
    $.ajax({
      url: url,
      data: {
        section: section
      },
      type: "post",
      beforeSend: function() {
        $("#inventory-loader").show();
      },
      success: function(data) {
        $("#fetched-content").html(data);
        $("#inventory-loader").hide();
      },
      error: function() {
        alert("error");
      }
    });
  }
  //   import { loadCategory } from "./inventory-fetch-content";
  $("[name=delete-button]").on("click", function() {
    url = "inventory/actions/delete.php";
    var section = $(this).attr("data-section");
    var attribs = [$(this).attr("data-attribs")] + "'";
    var attribsArr = attribs.split(",");
    $.confirm({
      title: "Warning",
      content: "Do you want to delete this item?",
      buttons: {
        confirm: function() {
          $.ajax({
            type: "POST",
            url: url,
            data: { section: section, data: attribsArr },
            success: function(data) {
              loadCategory(urlfetch, section);
              $.notify("Item deleted", "warn");
            }
          });
        },
        cancel: function() {},
        cancel: {
          btnClass: "btn-blue"
        }
      }
    });
  });
});
