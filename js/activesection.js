$(document).ready(function() {
  $("a[name=category]").on("click", function() {
    var category = $(this).attr("data-category");
    toggleClass(category);
    $(this, "svg").addClass("cat-icon");
  });
  function toggleClass(category) {
    $("section-master , a").removeClass("section-active");
    $("a, svg").removeClass("cat-icon");
    $("#" + category).toggleClass("section-active");
  }
});
