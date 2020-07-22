$(document).ready(function () {
  $("#duplicated-warning").hide();
  var proceed = null;
  // Detect Duplicated
  $("#st-input").on("change keyup input", function () {
    var value = $.trim($(this).val());
    $("#add-form").attr("data-data", value);
    var section = $("#add-form").attr("data-section");
    var column = $("#add-form").attr("data-column");
    var datasql = $("#add-form").attr("data-data");
    const checkurl = "inventory/actions/checkDuplicated.php";
    $.ajax({
      url: checkurl,
      data: {
        section: section,
        column: column,
        data: datasql,
      },
      type: "post",
      success: function (data) {
        if (data != 0) {
          $("#duplicated-warning").show();
          proceed = false;
        } else {
          $("#duplicated-warning").hide();
          proceed = true;
        }
      },
      error: function () {
        alert("error on check duplicated");
      },
    });
  });
  $("#add-form").submit(function (e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var section = form.attr("data-section");
    var url = form.attr("action");
    // alert(section + url);
    // alert(section);
    if (proceed === true) {
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize() + "&section=" + section,
        // serializes the form's elements.
        success: function (data) {
          // alert(data);
          $("[name=add-modal]").modal("hide");
          $(".modal-backdrop").hide();
          loadCategory(urlfetch, section);
          $.notify("Item added successfully", "info");
        },
      });
    }
  });
  function loadCategory(url, section) {
    $.ajax({
      url: url,
      data: {
        section: section,
      },
      type: "post",
      beforeSend: function () {
        $("#inventory-loader").show();
      },
      success: function (data) {
        $("#fetched-content").html(data);
        $("#inventory-loader").hide();
      },
      error: function () {
        alert("error");
      },
    });
  }
});
