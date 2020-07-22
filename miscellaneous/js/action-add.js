$(document).ready(function() {
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
  $("form#add-form").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var category = $(this).attr("data-m-category");
    var lowcategory = category.toLowerCase();
    var formData = new FormData(this);
    var type = $(this).attr("data-m-type");
    formData.append("type", type);

    var url = "./miscellaneous/actions/add.php";

    // alert(section);
    $.ajax({
      type: "POST",
      url: url,
      data: formData,
      // serializes the form's elements.
      success: function(data) {
        $("[name=add-modal]").modal("hide");
        $(".modal-backdrop").hide();
        loadCategory(lowcategory, category);
        // loadCategory(urlfetch, section);
        // $.notify("Item added successfully", "info");
      },
      cache: false,
      contentType: false,
      processData: false,
      error: function() {
        alert("ocurrio un error");
      }
    });
  });
});
