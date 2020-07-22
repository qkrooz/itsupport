$(document).ready(function () {
  $(".nav .nav-link").on("click", function () {
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    $("#nav-tabContent").find(".show").removeClass("show active fade");
    $("#nav-tabContent")
      .find($(this).attr("href"))
      .addClass("show active fade");
  });
});
