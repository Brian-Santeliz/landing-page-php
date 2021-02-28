<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Nosotros | Destinos Paraiso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <script src="./js/jquery.js"></script>
  </head>
  <body>

<?php
  require("partials/header.php")

?>
    <section class="section nosotros">
        <div class="title-wrapper">
          <h2 class="title">Acerca de  <span class="subtitle">Nosotros</span></h2>
        </div>
        <div class="section-center nosotros-center">
          <div class="nosotros-img">
            <img
              src="./images/montaña.jpg"
              class="nosotros-photo"
              alt="awesome beach"
            />
          </div>
          <article class="nosotros-info">
            <h3>Comienza tu aventura</h3>
            <p>
             La diversión comienza cuando exploras el mundo que te rodea.
             Somos una empresa asociada al turismo, cuyo oficio es la intermediación, organización y realización de proyectos, planes e itinerarios, elaboración y venta de productos turísticos entre sus clientes y servicio de alojamiento (hoteles).
            </p>
            <p>
               Con el objetivo de poner los bienes y servicios turísticos a disposición de quienes deseen y puedan utilizarlos.
                En destinos paraíso nos preocupamos por tu comodidad, es por ellos que nos caracterizamos por ser una empresa con ética y confiabilidad.
               Vaya a dónde vayas, viaja seguro, viaja con destinos paraíso.
            </p>
            <a href="servicios.php" class="btn-primary">Servicios</a>
          </article>
        </div>
      </section>
   <?php 
    require("partials/footer.php")
   ?>