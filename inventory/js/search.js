$(document).ready(function() {
  $("#searchkey").on("keyup", function() {
    var value = $(this)
      .val()
      .toLowerCase();
    $("#tbody-content-table tr").filter(function() {
      $(this).toggle(
        $(this)
          .text()
          .toLowerCase()
          .indexOf(value) > -1
      );
    });
  });
});
