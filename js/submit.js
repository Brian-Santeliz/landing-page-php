$(() => {
  const form = $("#emailForm");
  form.submit(function (event) {
    event.preventDefault();
    const form = $(this);
    $.ajax({
      type: "POST",
      url: "./controller/index.php",
      data: form.serialize(),
      success: () => {
        form[0].reset();
        Swal.fire(
          "Registrado",
          "¡Te enviaremos las mejores ofertas!",
          "success"
        );
      },
    });
  });
});
