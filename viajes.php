<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Viajes | Destinos Paraisos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <script src="./js/jquery.js"></script>
  </head>
  <body>
    <header id="home">
        <nav class="navbar">
          <div class="nav-center">
            <div class="nav-header">
              <img src="./images/destinoParaiso.png" class="nav-logo" alt="" />
              <button type="button" class="nav-toggle" id="nav-toggle" aria-label="nav toggler ">
                <i class="fas fa-bars"></i>
              </button>
            </div>
            <div class="nav-links" id="nav-links">
              <a href="index.php" class="scroll-link nav-link">
                Inicio
              </a>
              <a href="nosotros.php" class=" scroll-link nav-link">
                Nosotros
              </a>
              <a href="servicios.php" class="nav-link scroll-link">
                Servicios
              </a>
              <a href="viajes.php" class="nav-link scroll-link">
                Viajes
              </a>
            </div>
            <div class="nav-icons">
              <a href="http://uvm.edu.ve/" target="_blank" class="nav-icon"><i class="fab fa-facebook"></i></a>
              <a href="http://uvm.edu.ve/" target="_blank" class="nav-icon"><i class="fab fa-twitter"></i></a>
              <a href="http://uvm.edu.ve/" target="_blank" class="nav-icon"><i class="fab fa-squarespace"></i></a>
            </div>
        </nav>
        <div class="hero">
          <div class="hero-banner">
            <h1 class="hero-title">Descubre Destinos</h1>
            <p class="hero-text">
             Conoce los próximos viajes disponibles en Destinos Paraiso
            </p>
            <a href="index.php" class="btn btn-white scroll-link">Inicio</a>
          </div>
        </div>
      </header>
    <section class="section featured-tours">
      <div class="title-wrapper">
        <h2 class="title">Próximos <span class="subtitle">Viajes</span></h2>
      </div>
      <div class="section-center featured-center">
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
        <article class="tour-card">
          <div class="tour-img-container">
            <img src="./images/Huahine.jpg" class="tour-img" alt="" />
            <p class="tour-date">diciembre 5, 2021</p>
          </div>
          <div class="tour-footer">
            <h4 class="tour-title">Huahine. La esencia de los Mares del Sur
            </h4>
            <div class="tour-info">
              <p class="tour-country">
                <span><i class="fas fa-map"></i></span> Francia
              </p>
              <div class="tour-details">
                <p>22 dias</p>
                <p>desde $5400</p>
              </div>
            </div>
          </div>
        </article>
        <article class="tour-card">
          <div class="tour-img-container">
            <img src="./images/ngorongoro.jpg" class="tour-img" alt="" />
            <p class="tour-date">diciembre 10, 2021</p>
          </div>
          <div class="tour-footer">
            <h4 class="tour-title">Cráter de Ngorongoro. El hogar del mundo salvaje</h4>
            <div class="tour-info">
              <p class="tour-country">
                <span><i class="fas fa-map"></i></span> Tanzania
              </p>
              <div class="tour-details">
                <p>10 dias</p>
                <p>desde $5400</p>
              </div>
            </div>
          </div>
        </article>
        <article class="tour-card">
          <div class="tour-img-container">
            <img src="./images/patagonia.jpg" class="tour-img" alt="" />
            <p class="tour-date">diciembre 24, 2021</p>
          </div>
          <div class="tour-footer">
            <h4 class="tour-title">Patagonia. Escenarios de hielos eternos</h4>
            <div class="tour-info">
              <p class="tour-country">
                <span><i class="fas fa-map"></i></span> Chile
              </p>
              <div class="tour-details">
                <p>22 dias</p>
                <p>desde $5400</p>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>
    <?php
    require("partials/footer.php")
    ?>