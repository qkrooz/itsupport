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
  $("a[name=addmore-button]").on("click", function() {
    var id = $(this).attr("data-id");
    var category = $(this).attr("data-m-category");
    var lowcategory = category.toLowerCase();
    $.confirm({
      title: "Add More",
      content:
        "" +
        '<form action="" class="formName">' +
        '<div class="form-group">' +
        "<label>Add more items</label>" +
        '<input type="text" placeholder="Quantity" class="quantity form-control"  name="quantity" required />' +
        "</div>" +
        "</form>",
      buttons: {
        formSubmit: {
          text: "Add",
          btnClass: "btn-blue",
          action: function() {
            var quantity = this.$content.find(".quantity").val();
            if (!quantity || quantity < 0 || quantity % 1 != 0) {
              $.alert("Provide a valid quantity");
              return false;
            }
            var url = "./miscellaneous/actions/addmore.php";
            $.ajax({
              type: "POST",
              url: url,
              data: { id: id, quantity: quantity },
              // serializes the form's elements.
              success: function(data) {
                $.notify("Item updated successfully", "success");
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
