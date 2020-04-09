function sendContact() {
  jQuery.ajax({
    url: "contactO.php",
    data:
      "Nombre=" +
      $("#nombre").val() +
      "&Email=" +
      $("#email").val() +
      "&Mensaje=" +
      $("#mensaje").val(),
    type: "POST",
    success: function (data) {
      $("#mail-status").html(data);
    },
    error: function () {},
  });
}
