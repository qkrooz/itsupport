$(document).ready(function() {
  $("#random-again").on("click", function() {
    var url = "inventory/audit-fetch.php";
    var section = $("#random-again").attr("data-audit");
    $("#auditModal-body").empty();
    fetchAuditJQ(url, section);
  });
  function fetchAuditJQ(url, section) {
    $.ajax({
      url: url,
      data: {
        section: section
      },
      type: "post",
      beforeSend: function() {},
      success: function(data) {
        $("#auditModal-body").html(data);
      },
      error: function() {
        alert("error");
      }
    });
  }
});
