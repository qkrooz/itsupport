$(document).ready(function() {
  const url = "inventory/fetch-Master.php";
  function loadDefault(url, section) {
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
  loadDefault(url, "Desktops");

  $("#category-select").on("change", function() {
    var section = $(this).val();
    loadCategory(url, section);
  });
});
