<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Inicio | Destinos Paraiso</title>
  <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <script src="./js/jquery.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
<?php 
  require("partials/header.php")
?>
  <section class="section about">
    <div class="title-wrapper">
      <h2 class="title">Acerca de <span class="subtitle">Nosotros</span></h2>
    </div>
    <div class="section-center about-center">
      <div class="about-img">
        <img src="./images/cañon.jpg" class="about-photo" alt="awesome beach" />
      </div>
      <article class="about-info">
        <h3>Mira el mundo diferente</h3>
        <p>
          Con más de 10 años en el mercado, Agencia de Destinos Paraiso, cuenta con 24 agencias, con asesores de viajes dispuestos a brindar la mejor atención y asesoría a todos sus clientes. 
        </p>
        <p>
          Comida,
          Entretenimiento,
          Atención médica son algunos de nuestros rasgos como empresa.
          En caso de ser necesario destinos paraíso en cada vuelo cuenta con experto médicos para ser atendido.
        </p>
        <a href="nosotros.php" class="btn-primary">Nosotros</a>
      </article>
    </div>
  </section>
  <section class="section services">
    <div class="title-wrapper">
      <h2 class="title">Nuestros <span class="subtitle">Servicios</span></h2>
    </div>
    <div class="section-center services-center">
      <article class="service">
        <span class="service-icon"><i class="fas fa-wallet fa-fw"></i></span>
        <div class="service-info">
          <h4 class="service-title">Ahorra Dinero</h4>
          <p class="service-text">
            Somos la solución ideal para ti, nuestros precios son los mejores del mercado.
          </p>
        </div>
      </article>
      <article class="service">
        <span class="service-icon"><i class="fas fa-tree fa-fw"></i></span>
        <div class="service-info">
          <h4 class="service-title">Viajes Únicos</h4>
          <p class="service-text">
            Trabajamos continuamente en mejorar tu experiencia de visitar un nuevo lugar. 
            Tu comodidad es nuestra prioridad.
          </p>
        </div>
      </article>
      <article class="service">
        <span class="service-icon"><i class="fas fa-socks fa-fw"></i></span>
        <div class="service-info">
          <h4 class="service-title">Sientase en casa </h4>
          <p class="service-text">
            Queremos que destinos paraíso sea tu segundo hogar, y es por ello que siempre buscamos la perfección en nuestros aviones.
          </p>
        </div>
        
      </article>
    </div>
  </section>
  <section class="section featured-tours">
    <div class="title-wrapper">
      <h2 class="title">Próximos <span class="subtitle">Viajes</span></h2>
    </div>
    <div class="section-center featured-center ">
      <article class="tour-card">
        <div class="tour-img-container">
          <img src="./images/seychelles.jpg" class="tour-img" alt="" />
          <p class="tour-date">agosto 14, 2021</p>
        </div>
        <div class="tour-footer">
          <h4 class="tour-title">North y DenisIsland. El triunfo de lo exclusivo</h4>
          <div class="tour-info">
            <p class="tour-country">
              <span><i class="fas fa-map"></i></span> Seychelles
            </p>
            <div class="tour-details">
              <p>6 dias</p>
              <p>desde $2100</p>
            </div>
          </div>
        </div>
      </article>
      <article class="tour-card">
        <div class="tour-img-container">
          <img src="./images/playa.jpeg" class="tour-img" alt="" />
          <p class="tour-date">Octubre 1, 2021</p>
        </div>
        <div class="tour-footer">
          <h4 class="tour-title">Playas Exóticas cristalinas</h4>
          <div class="tour-info">
            <p class="tour-country">
              <span><i class="fas fa-map"></i></span> Hawaii
            </p>
            <div class="tour-details">
              <p>10 dias</p>
              <p>desde $4100</p>
            </div>
          </div>
        </div>
      </article>
      <article class="tour-card">
        <div class="tour-img-container">
          <img src="./images/fernando-de-noronha.jpg" class="tour-img" alt="" />
          <p class="tour-date">septiembre 26, 2021</p>
        </div>
        <div class="tour-footer">
          <h4 class="tour-title">Fernando de Noronha. La esmeralda del Atlántico</h4>
          <div class="tour-info">
            <p class="tour-country">
              <span><i class="fas fa-map"></i></span>Brasil
            </p>
            <div class="tour-details">
              <p>12 dias</p>
              <p>desde $3100</p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="tour-link">
      <a href="viajes.php" class="btn-primary">Ver todos los viajes</a>
    </div>
  </section>
  <section class="gallery">
    <div class="title-wrapper">
      <h2 class="title">Núestra <span class="subtitle ">Galeria</span></h2>
    </div>

    <div class="gallery-center">
      <div class="gallery-img-container">
        <img src="./images/Huahine.jpg" class="gallery-img" alt="" />
        <span class="gallery-icon"><i class="fas fa-search"></i></span>
      </div>
      <div class="gallery-img-container">
        <img src="./images/santorini.jpg" class="gallery-img" alt="" />
        <span class="gallery-icon"><i class="fas fa-search"></i></span>
      </div>
      <div class="gallery-img-container">
        <img src="./images/patagonia.jpg" class="gallery-img" alt="" />
        <span class="gallery-icon"><i class="fas fa-search"></i></span>
      </div>
     
      <div class="gallery-img-container">
        <img src="./images/fernando-de-noronha.jpg" class="gallery-img" alt="" />
        <span class="gallery-icon"><i class="fas fa-search"></i></span>
      </div>
    </div>
  </section>
  <section class="section deals">
    <div class="title-wrapper">
      <h2 class="title">Recibe <span class="subtitle ">Ofertas</span></h2>
    </div>
    <form id="emailForm">
      <div class="input-group">
        <input type="email" name="email"  required class="form-control" placeholder="escribe tu email" />
        <button type="submit" class="btn-submit">submit</button>
      </div>
    </form>
  </section>
  <?php 
    require("partials/footer.php")
   ?>