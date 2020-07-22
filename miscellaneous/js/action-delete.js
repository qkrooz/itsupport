$(document).ready(function() {
  $("[name=m-delete-button]").on("click", function() {
    var category = $(this).attr("data-m-category");
    var lowcategory = category.toLowerCase();
    const url = "./miscellaneous/actions/delete.php";
    var id = $(this).attr("data-id");
    var img = "../../" + $(this).attr("data-img");
    $.confirm({
      title: "Warning",
      content: "Do you want to delete this item?",
      buttons: {
        confirm: function() {
          $.ajax({
            type: "POST",
            url: url,
            data: { id: id, img: img },
            // serializes the form's elements.
            success: function(data) {
              $("[name=add-modal]").modal("hide");
              $(".modal-backdrop").hide();
              $.notify("Device deleted", "warn");
              loadCategory(lowcategory, category);

              // loadCategory(urlfetch, section);
              // $.notify("Item added successfully", "info");
            },
            error: function() {}
          });
        },
        cancel: function() {},
        cancel: {
          btnClass: "btn-blue"
        }
      }
    });
  });
  function loadCategory(lowcategory, category) {
    url = "miscellaneous/miscellaneous.fetch.php";
    $.ajax({
      url: url,
      data: {
        section: category
      },
      type: "post",
      beforeSend: function() {
        // $("#inventory-loader").show();
      },
      success: function(data) {
        $("#m-" + lowcategory).html(data);
        // $("#inventory-loader").hide();
      },
      error: function() {
        alert("error");
      }
    });
  }
});
