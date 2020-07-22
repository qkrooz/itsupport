$(document).ready(function() {
  var url = "./inventory/audit-fetch.php";
  $("a[name=audit-inventory]").on("click", function() {
    // alert("funciono");
    var section = $(this).attr("data-audit");
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
