$(document).ready(function() {
  function loadCategory(lowcategory, category) {
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
        $("#m-" + lowcategory).html(data);
        // $("#inventory-loader").hide();
      },
      error: function() {
        alert("error");
      }
    });
  }
  $("a[name=assign-button]").on("click", function() {
    var id = $(this).attr("data-id");
    var category = $(this).attr("data-m-category");
    var lowcategory = category.toLowerCase();
    $.confirm({
      title: "Assign this item",
      content:
        "" +
        '<form action="" class="formName">' +
        '<div class="form-group">' +
        '<input type="text" placeholder="User" class="username form-control"  name="username" required />' +
        '<input type="text" placeholder="Location" class="location form-control"  name="location" required />' +
        '<input type="text" placeholder="Motive" class="motive form-control"  name="area" required />' +
        "</div>" +
        "</form>",
      buttons: {
        formSubmit: {
          text: "Assign",
          btnClass: "btn-blue",
          action: function() {
            var user = this.$content.find(".username").val();
            var location = this.$content.find(".location").val();
            var motive = this.$content.find(".motive").val();
            var url = "./miscellaneous/actions/assign.php";
            // alert(user);
            $.ajax({
              type: "POST",
              url: url,
              data: {
                id: id,
                category: category,
                user: user,
                location: location,
                motive: motive
              },
              // serializes the form's elements.
              success: function(data) {
                // alert(data);
                $.notify("Successfully assigned", "info");
                loadCategory(lowcategory, category);
                // loadCategory(urlfetch, section);
                // $.notify("Item added successfully", "info");
              },
              error: function() {
                alert("ocurrio un error");
              }
            });
          }
        },
        cancel: function() {
          //close
        }
      },
      onContentReady: function() {
        // bind to events
        var jc = this;
        this.$content.find("form").on("submit", function(e) {
          // if the user submits the form by pressing enter in the field.
          e.preventDefault();
          jc.$$formSubmit.trigger("click"); // reference the button and click it
        });
      }
    });
  });
});
