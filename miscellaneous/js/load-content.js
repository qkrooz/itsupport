$(document).ready(function() {
  // loadQuickOut();
  // $("a[name=m-dashboard-button").on("click", function() {
  //   loadQuickOut();
  // });
  $("#m-mouses").load("miscellaneous/miscellaneous.fetch.php");
  $("a[name=m-category-button]").on("click", function() {
    $("#addModal").remove();
    var category = $(this).attr("data-m-category");
    var idcapital = category.toLowerCase();
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
        $("#m-" + idcapital).html(data);
        // $("#inventory-loader").hide();
      },
      error: function() {
        alert("error");
      }
    });
  });
  // function loadQuickOut() {
  //   $("#m-dash").load("miscellaneous/quickout.php");
  // }
});
