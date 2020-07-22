$(document).ready(function() {
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
  // Loading Info
  $("a[name=edit-button]").on("click", function() {
    var id = $(this).attr("data-id");
    var section = $(this).attr("data-section");
    var url = "inventory/actions/catchEditData.php";

    $.ajax({
      url: url,
      data: {
        id: id,
        section: section
      },
      type: "post",
      success: function(data) {
        $("#editForm").html(data);
        $("#editForm").attr("data-id", id);
      },
      error: function() {
        alert("error 1");
      }
    });
  });
  // Submito form
  $("#editForm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    const urlfetch = "inventory/fetch-Master.php";
    var id = $(this).attr("data-id");
    var form = $(this);
    var section = $(this).attr("data-section");
    var url = "inventory/actions/edit.php";
    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize() + "&section=" + section + "&id=" + id,
      // serializes the form's elements.
      success: function(data) {
        $("[name=add-modal]").modal("hide");
        $(".modal-backdrop").hide();
        // alert(data);
        loadCategory(urlfetch, section);
        $.notify("Item modified successfully", "success");
      },
      error: function() {
        alert("error en editform");
      }
    });
  });
});
