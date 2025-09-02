<?php include('header.php'); ?>

<style>
  /* Espacio reducido entre secciones */
  .content-section {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  /* Galería de Proyectos */
  #galeria .gallery-item {
    overflow: hidden;
    border-radius: 4px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    margin-bottom: 1rem;
    /* separa verticalmente */
  }

  #galeria .gallery-item img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    display: block;
    transition: transform 0.3s;
  }

  #galeria .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }

  #galeria .gallery-item:hover img {
    transform: scale(1.1);
  }

  /* Listado de Municipios y Veredas */
  #muniveredas .muni-card {
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    margin-bottom: 1.5rem;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  #muniveredas .muni-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  }

  #muniveredas .muni-card h3 {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
    color: #2c3e50;
  }

  #muniveredas .muni-card ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
  }

  #muniveredas .muni-card ul li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.5rem;
    color: #555;
  }

  #muniveredas .muni-card ul li:before {
    content: "\f058";
    /* Font Awesome check-circle */
    font-family: FontAwesome;
    position: absolute;
    left: 0;
    top: 0;
    color: #f0ad4e;
  }
</style>

<!-- begin:main-title -->
<div class="main-title block-section padd-40-top padd-60-btm bg-grey text-center">
  <h1 class="main-title-primary">Proyectos</h1>
  <h4 class="main-title-secondary">Nuestros Proyectos</h4>
</div>
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="index.php">Inicio</a></li>
          <li class="active">Proyectos</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- end:main-title -->
<!-- Municipios y Veredas -->
<section id="muniveredas" class="content-section">
  <div class="container">
    <h2 class="mb-3">Municipios y Veredas</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="muni-card" data-aos="fade-up">
          <h3>Palestina, Huila</h3>
          <ul>
            <li>La Guajira</li>
            <li>Villas del Macizo</li>
            <li>La Mensura</li>
            <li>El Paraíso</li>
            <li>Emaús</li>
            <li>Los Pinos</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="muni-card" data-aos="fade-up" data-aos-delay="100">
          <h3>Acevedo, Huila</h3>
          <ul>
            <li>La Tocora</li>
            <li>Los Ángeles</li>
            <li>Peñas Blancas</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="muni-card" data-aos="fade-up" data-aos-delay="200">
          <h3>Pitalito, Huila</h3>
          <ul>
            <li>El Diviso</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="muni-card" data-aos="fade-up" data-aos-delay="300">
          <h3>San José de Isnos, Huila</h3>
          <ul>
            <li>Brisas del Magdalena</li>
            <li>Remolinos</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Galería de Proyectos -->
<section id="galeria" class="content-section">
  <div class="container">
    <h2 class="mb-3">Galería de Proyectos</h2>
    <div class="row g-3">
      <div class="col-6 col-md-3 gallery-item" data-aos="zoom-in">
        <img src="imagenes/PROYECTOS/Construcción de planta.jpg" alt="Proyecto general 1">
      </div>
      <div class="col-6 col-md-3 gallery-item" data-aos="zoom-in" data-aos-delay="100">
        <img src="imagenes/PROYECTOS/Construcción de redes externas.jpg" alt="Proyecto general 2">
      </div>
      <div class="col-6 col-md-3 gallery-item" data-aos="zoom-in" data-aos-delay="200">
        <img src="imagenes/PROYECTOS/Construsción redes internas.jpg" alt="Proyecto general 3">
      </div>
      <div class="col-6 col-md-3 gallery-item" data-aos="zoom-in" data-aos-delay="300">
        <img src="imagenes/PROYECTOS/Planta  GLP.jpg" alt="Proyecto general 4">
      </div>
      <div class="col-6 col-md-3 gallery-item" data-aos="zoom-in" data-aos-delay="400">
        <img src="imagenes/PROYECTOS/Prueba de hermeticidad de linea interna.jpg" alt="Proyecto general 5">
      </div>
      <div class="col-6 col-md-3 gallery-item" data-aos="zoom-in" data-aos-delay="500">
        <img src="imagenes/PROYECTOS/Socialización de proyectos.jpg" alt="Proyecto general 6">
      </div>
    </div>
  </div>
</section>



<?php include('footer.php'); ?>