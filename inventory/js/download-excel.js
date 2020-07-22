$(document).ready(function() {
  $("#download-excel").on("click", function() {
    var section = $(this).attr("data-section");
    var newtable = $("#audit-table-header")
      .clone()
      .appendTo("#content-audit-canvas");
    $("#audit-table-content")
      .clone()
      .appendTo(newtable);
    // Nombre del archivo
    // Obteniendo fecha
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, "0");
    var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
    var yyyy = today.getFullYear();
    today = mm + "-" + dd + "-" + yyyy;
    // obteniendo seccion.
    var date = $(newtable).table2excel({
      // exclude CSS class
      exclude: ".noExl",
      name: section,
      filename: "AUDIT-" + section + "-" + today, //do not include extension
      fileext: ".xlsx" // file extension
    });
    $(newtable).empty();
  });
  $("#btn-excel").click(function() {
    var section = $(this).attr("data-section");
    var newtable = $("#inventory-table-header")
      .clone()
      .appendTo("#excel-template-notrendering");
    $("#fetched-content-table")
      .clone()
      .appendTo(newtable);
    $("#excel-template-notrendering tr[style='display: none;']").remove();
    // Nombre del archivo
    // Obteniendo fecha
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, "0");
    var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
    var yyyy = today.getFullYear();
    today = mm + "-" + dd + "-" + yyyy;
    // obteniendo seccion.
    var date = $(newtable).table2excel({
      // exclude CSS class
      exclude: ".noExl",
      name: section,
      filename: "ITInventory-" + section + "-" + today, //do not include extension
      fileext: ".xlsx" // file extension
    });
    $(newtable).empty();
  });
});
