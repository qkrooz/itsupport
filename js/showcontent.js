$(document).ready(function () {
  // loadCategoryContent("inventory");
  // $("#inventory").addClass("section-active");
  // $("#inventory, i").addClass("cat-icon");
  // $("a[name=category]").on("click", function () {
  //   var category = $(this).attr("data-category");
  //   removeClasses();
  //   $(this).addClass("section-active");
  //   $(this, "svg").addClass("cat-icon");
  //   loadCategoryContent(category);
  //   sessionStorage.setItem("currentCategory", category);
  // });
  // function removeClasses() {
  //   $("#section-master , a").removeClass("section-active");
  //   $("a, svg").removeClass("cat-icon");
  // }
  // function loadCategoryContent(category) {
  //   $("#main-content").load(category + "/" + category + ".view.php");
  // }
  $("#dashboard").load("dashboard/dashboard.view.php");
  $("#sites").load("sites/sites.view.php");
  $("#tickets").load("tickets/tickets.view.php");
  $("#inventory").load("inventory/inventory.view.php");
  $("#miscellaneous").load("miscellaneous/miscellaneous.view.php");
  $("#logs").load("logs/logs.view.php");
  $("#calendar").load("calendar/calendar.view.php");
  $("#docs").load("docs/docs.view.php");
  $("#activities").load("activities/activities.view.php");
  $("#stadistics").load("stadistics/stadistics.view.php");
  $("#training").load("training/training.view.php");
  $("#data").load("data/data.view.php");
  $("#users").load("users/users.view.php");
  $("#about").load("about/about.view.php");
  $("#config").load("config/config.view.php");
});
