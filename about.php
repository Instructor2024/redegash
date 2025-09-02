<?php
include('header.php');
?>

<style>
  /* 1) Justificar todo el texto de párrafos */
  .about p,
  .mision-section p,
  .valores-section>p,
  .valor-item p {
    text-align: justify;
  }

  /* 2) Alinear verticalmente los bloques de misión y visión */
  .mision-section .row {
    display: flex;
    align-items: center;
    /* centra verticalmente */
  }

  .mision-section .row>div {
    display: flex;
    flex-direction: column;
    /* para que el contenido interno quede en columna */
    justify-content: center;
    /* centra el texto o la imagen dentro de su columna */
  }

  .mision-section img {
    display: block;
    margin: 0 auto;
    /* centra la imagen horizontalmente */
  }
</style>
<style>
  /* Grid responsivo para valores */
  .valores-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
  }

  @media (min-width: 768px) {
    .valores-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  /* Estilo de tarjeta para cada valor */
  .valor-card {
    background: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 0.5rem;
    padding: 1.25rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    transition: transform .2s;
    margin-bottom: 10px;
  }

  .valor-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .valor-card h5 {
    font-size: 1.5rem;
    margin-bottom: 0.75rem;
    display: flex;
    align-items: center;
  }

  .valor-card h5 i {
    margin-right: 0.5rem;
    color: #f0ad4e;
  }

  .valor-card p {
    font-size: 1.3rem;
    line-height: 1.5;
    text-align: justify;
  }

  /* Tamaño y recorte circular */
  .benefit-circle {
    width: 180px;
    /* ajusta al tamaño que prefieras */
    height: 180px;
    border-radius: 50%;
    overflow: hidden;
    /* recorta la imagen al círculo */
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px;
    /* centrado + separación inferior */
    box-shadow: 0 6px 12px rgba(0, 0, 0, .08);
  }

  /* La imagen llena el círculo sin deformarse */
  .benefit-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* recorte elegante */
    display: block;
  }

  /* (Opcional) Si quieres un borde alrededor del círculo */
  .benefit-circle::after {
    content: "";
    position: absolute;
    inset: 0;
    border: 4px solid rgba(255, 255, 255, .8);
    /* cambia color/grosor si quieres */
    border-radius: 50%;
    pointer-events: none;
  }

  /* Si ya no usarás el ícono ni el texto dentro del círculo, escóndelos */
  .benefit-circle .icon-badge,
  .benefit-circle .benefit-text {
    display: none;
  }

  /* (Opcional) título debajo del círculo */
  .benefit-title {
    font-weight: 600;
    margin-top: 8px;
    margin-bottom: 6px;
  }
</style>

<!-- begin:main-title -->
<div class="main-title block-section padd-40-top padd-60-btm bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="main-title-primary">NOSOTROS </h1>

      </div><!-- .col-## -->
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .main-title -->
<!-- end:main-title -->

<!-- begin:site-main -->
<div class="site-main">
  <!-- begin:content-section -->
  <div class="about content-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="imagenes/somos.jpg" class="img-responsive cast-shadow">
        </div><!-- .col-## -->
        <div class="col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1 padd-40-top">
          <p>QUIENES SOMOS </p>
          <p>Somos una empresa del sur del departamento del Huila, específicamente del Municipio de Palestina Huila,
            fundada en el año 2023, la cual tiene como objetivo llevar el servicio de gas domiciliario al departamento
            del Huila y demás que requieran de nuestros servicios. En REDEGAS DEL SUR S.A.S E.S.P., implementamos un
            Sistema de Gestión de Responsabilidad Social Empresarial con enfoque en sostenibilidad, orientado a
            fomentar
            condiciones más equitativas, habitables y sostenibles, mediante un balance armónico entre los aspectos
            sociales, económicos y ambientales en el marco de su gestión corporativa.</p>
        </div><!-- .col-## -->
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .about -->
  <!-- end:content-section -->


  <!-- Sección de Beneficios ajustada con títulos dentro del círculo -->
  <section id="beneficios" class="py-5">
    <div class="container text-center" data-aos="fade-up">
      <h2 class="fw-bold mb-6">BENEFICIOS</h2>
      <div class="benefits-row">

        <div class="benefit-item">
          <div class="benefit-circle">
            <img src="imagenes/BENEFICIOS/seguridad.png" alt="Mayor seguridad">
          </div>
          <div class="benefit-title">Mayor seguridad</div>
          <div class="benefit-desc">
            Con el suministro ininterrumpido de GLP, tiene el control de su consumo: únicamente paga por los metros
            cúbicos (m³) que fueron utilizados y ya no necesita esperar pedidos por teléfono.
          </div>
        </div>

        <div class="benefit-item">
          <div class="benefit-circle">
            <img src="imagenes/BENEFICIOS/impacto.png" alt="Impacto Ambiental Reducido">
          </div>
          <div class="benefit-title">Impacto Ambiental Reducido</div>
          <div class="benefit-desc"> El uso de GLP disminuye la deforestación y reduce emisiones de monóxido de carbono,
            contribuyendo
            positivamente a la conservación ambiental.</div>
        </div>


        <div class="benefit-item">
          <div class="benefit-circle">
            <img src="imagenes/BENEFICIOS/comodo.png" alt="Más cómodo">
          </div>
          <div class="benefit-title">Más cómodo</div>
          <div class="benefit-desc"> Bajo costo de instalación y mayor rendimiento, lo que reduce sus gastos y ofrece
            una opción económica para
            uso doméstico e industrial.</div>
        </div>



      </div>
    </div>
  </section>

  <section class="mision-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>Nuestra <span class="text-warning">Misión</span></h2>
          <p>Contribuir al mejoramiento de calidad de vida de nuestros usuarios, a través de proyectos integrales de
            gasificación, logrando satisfacer sus necesidades y expectativas con base en la experiencia y el trabajo
            en
            equipo del talento humano.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <img src="imagenes/mision.png" width="430px" alt="Nuestra Misión" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </section>

  <section class="mision-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>Nuestra <span class="text-warning">Visión</span></h2>
          <p>Consolidarnos en el sur del Departamento del Huila como empresa de servicios públicos domiciliarios
            líder,
            reconocida por su efectividad, calidad y responsabilidad social en cada uno de sus proyectos de
            gasificación.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <img src="imagenes/vision.png" width="430px" alt="Nuestra Misión" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </section>

  <section class="valores-section">
    <div class="container" data-aos="fade-up">
      <h2 class="mb-4 text-center">Principios y Valores</h2>
      <div class="valores-grid">

        <div class="valor-card" data-aos="fade-up">
          <h5><i class="fa fa-check"></i> Integridad y honestidad</h5>
          <p>Este principio implica la adopción de comportamientos éticos que evidencien integridad, honestidad y
            transparencia en cada acción dentro del entorno profesional y público. REDEGAS DEL SUR S.A.S E.S.P., en su
            calidad de empresa de servicios públicos, reafirma su compromiso con el estricto cumplimiento de todas las
            disposiciones legales que le sean aplicables. Asimismo, ningún integrante de la organización colaborará con
            terceros en la transgresión de normas ni se involucrará en conductas que vulneren el principio de legalidad.
          </p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> Lealtad</h5>
          <p>Los funcionarios obrarán con fidelidad a la empresa y sus objetivos anteponiendo los intereses de la
            sociedad a los personales.</p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="200">
          <h5><i class="fa fa-check"></i> Responsabilidad</h5>
          <p>Se reconoce la existencia de reglas de comportamiento y de actitud empresarial para contribuir al
            crecimiento y desarrollo del país.</p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="300">
          <h5><i class="fa fa-check"></i> Gestión de la imagen</h5>
          <p>La estructura de buen gobierno corporativo, asegura el tratamiento equitativo y respetuoso para todos los
            accionistas, funcionarios, proveedores, clientes y grupos de interés que se relacionen con La empresa de
            servicios públicos REDEGAS DEL SUR S.A.S E.S.P.</p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> Objetividad</h5>
          <p>Se garantizará un análisis exhaustivo de las consultas y denuncias que no será permeado por apreciaciones
            subjetivas de los miembros de la organización.</p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> Respeto</h5>
          <p>Las personas deben ser valoradas en toda su dimensión aceptando la diversidad en su pensamiento, credo e
            ideología política, entre otros aspectos.</p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-handshake"></i> Debido proceso</h5>
          <p>Se garantizará en todo momento el máximo respeto a los derechos de las personas presuntamente relacionadas
            en un posible incumplimiento del código. Se garantizará en todo momento el derecho de defensa para que los
            implicados en una investigación puedan exponer sus argumentos y explicaciones que consideren pertinentes.
          </p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> No se admitirán represalias</h5>
          <p>Los integrantes de REDEGAS DEL SUR S.A.S E.S.P., empresa de servicios públicos, podrán realizar denuncias o
            reportes con la certeza de que no serán objeto de sanciones ni represalias de ningún tipo. Cualquier acto
            que pueda interpretarse como retaliación frente a reportes sobre posibles fraudes o infracciones a los
            códigos de ética y conducta será considerado una falta grave y deberá estar debidamente contemplado en el
            reglamento interno de la organización.</p>
        </div>


        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> Confidencialidad</h5>
          <p>Se garantizará que la información esté disponible sólo para aquellas personas que estén debidamente
            autorizadas para el efecto y que la misma será utilizada para los fines que se requieren y con la misma
            confidencialidad.</p>
        </div>



        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> Ética</h5>
          <p>Es el conjunto de normas que valoran el comportamiento humano en una sociedad.</p>
        </div>



        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> Buena Fe</h5>
          <p>Los integrantes de REDEGAS DEL SUR S.A.S E.S.P., empresa de servicios públicos, podrán realizar denuncias o
            reportes con la certeza de que no serán objeto de sanciones ni represalias de ningún tipo. Cualquier acto
            que pueda interpretarse como retaliación frente a reportes sobre posibles fraudes o infracciones a los
            códigos de ética y conducta será considerado una falta grave y deberá estar debidamente contemplado en el
            reglamento interno de la organización.</p>
        </div>

        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <h5><i class="fa fa-check"></i> Transparencia</h5>
          <p>Todas las actuaciones de los colaboradores y de las compañías estarán encaminadas a desarrollar el objeto
            social de manera honesta, transparente y legítima..</p>
        </div>
        <!-- Resto de valores... -->

      </div>
    </div>
  </section>


  <?php

  include('footer.php');

  ?>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/plugins/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/plugins/parallax.min.js"></script>
  <script src="assets/js/navigation.js"></script>
  <script src="assets/plugins/jquery.easing.js"></script>
  <script src="assets/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/plugins/imagesloaded.pkgd.min.js"></script>
  <script src="assets/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/plugins/owl.carousel.min.js"></script>
  <script src="assets/js/script.min.js"></script>
  <script>// Main JS
    // Menu toggle
    var navToggle = document.querySelector('.navbar-toggler');
    if (navToggle) {
      navToggle.addEventListener('click', function () {
        document.getElementById('navbarNav').classList.toggle('show');
      });
    }

    // Contador animado
    function animateCounter(entry) {
      if (entry.isIntersecting) {
        var counters = document.querySelectorAll('.stat-number');
        counters.forEach(function (counter) {
          var target = +counter.getAttribute('data-target');
          var count = 0;
          var step = target / 100;
          var interval = setInterval(function () {
            count += step;
            if (count >= target) {
              counter.textContent = target + '+';
              clearInterval(interval);
            } else {
              counter.textContent = Math.floor(count);
            }
          }, 20);
        });
        observer.disconnect();
      }
    }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(animateCounter);
    });
    var stats = document.querySelector('#stats');
    if (stats) {
      observer.observe(stats);
    }

    // Contact form alert
    var contactForm = document.querySelector('#contacto form');
    if (contactForm) {
      contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        document.getElementById('alertExito').classList.remove('d-none');
      });
    }
  </script>
  </body>

  </html>