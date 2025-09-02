<?php

include("header.php");

?>
<!-- Página: servicios.php  |  Versión ajustada sin incluir el header -->

<!-- begin:main-title -->
<div class="main-title block-section padd-40-top padd-60-btm bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1 class="main-title-primary">Nuestros Servicios</h1>
      </div>
    </div>
  </div>
</div>
<!-- end:main-title -->

<!-- begin:breadcrumb -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="index.php">Inicio</a></li>
          <li class="active">Servicios</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- end:breadcrumb -->

<!-- begin:site-main -->
<div class="site-main">

  <!-- begin:content-section -->
  <div class="content-section">
    <div class="container">
      <div class="row">

        <!-- sidebar -->
        <div class="col-md-3">
          <aside class="sidebar site-sidebar">
            <nav class="widget widget_nav_menu">
              <ul class="nav nav-pills nav-stacked">
                <li class="current-menu-item"><a href="#todos">Todos los servicios</a></li>
                <!-- <li><a href="#glp">Comercialización y distribución de GLP</a></li>
                <li><a href="#instalacion">Instalación de redes de gas</a></li>
                <li><a href="#mantenimiento">Mantenimiento de redes de gas</a></li>
                <li><a href="#proyectos">Proyectos de gasificación</a></li> -->
              </ul>
            </nav>

            <!-- Brochure (opcional) -->
            <div class="widget widget_brocure">
              <h3 class="widget-title">Brochure</h3>
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="docs/brochure-redegas.pdf"><i class="fa fa-file-pdf-o"></i> <span>Descargar
                      .PDF</span></a></li>
              </ul>
            </div>
          </aside>
        </div>
        <!-- /sidebar -->

        <!-- servicios -->
        <div class="col-md-9">

          <div class="entry-content" id="todos">
            <div class="row">

              <!-- Servicio 1 -->
              <div class="col-sm-6 col-lg-4" id="glp">
                <div class="service-card">
                  <img src="assets/servicios/SERVICIO1.jpg" alt="Comercialización y distribución de GLP" class="img-responsive">
                  <h3 class="service-title">Comercialización y distribución&nbsp;de&nbsp;GLP</h3>
                  <p>Abastecemos clientes residenciales y comerciales, garantizando suministro seguro y continuo de Gas
                    Licuado de Petróleo (GLP). <!-- :contentReference[oaicite:4]{index=4} --></p>
                </div>
              </div>

              <!-- Servicio 2 -->
              <div class="col-sm-6 col-lg-4" id="instalacion">
                <div class="service-card">
                  <img src="assets/servicios/SERVICIO2.jpg" alt="Instalación de redes de gas" class="img-responsive">
                  <h3 class="service-title">Instalación de&nbsp;redes&nbsp;de&nbsp;gas</h3>
                  <p>Diseño y montaje de redes internas y externas, cumpliendo normativas nacionales para garantizar
                    eficiencia y seguridad. <!-- :contentReference[oaicite:5]{index=5} --></p>
                </div>
              </div>

              <!-- Servicio 3 -->
              <div class="col-sm-6 col-lg-4" id="mantenimiento">
                <div class="service-card">
                  <img src="assets/servicios/SERVICIO3.jpg" alt="Mantenimiento de redes de gas" class="img-responsive">
                  <h3 class="service-title">Mantenimiento preventivo y&nbsp;correctivo</h3>
                  <p>Inspección y reparación de redes para asegurar la continuidad del servicio y prevenir fugas o
                    accidentes. <!-- :contentReference[oaicite:6]{index=6} --></p>
                </div>
              </div>

              <!-- Servicio 4 -->
              <div class="col-sm-6 col-lg-4" id="proyectos">
                <div class="service-card">
                  <img src="assets/servicios/servicio4.jpg" alt="Proyectos de gasificación" class="img-responsive">
                  <h3 class="service-title">Proyectos&nbsp;de&nbsp;gasificación</h3>
                  <p>Formulación, ejecución y operación de proyectos para suministro de gas combustible por redes en la
                    región. <!-- :contentReference[oaicite:7]{index=7} --></p>
                </div>
              </div>

            </div><!-- /.row -->
          </div><!-- /.entry-content -->

        </div><!-- /.col-md-9 -->
        <!-- /servicios -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.content-section -->
  <!-- end:content-section -->

</div><!-- /.site-main -->
<!-- end:site-main -->

<?php include('footer.php'); ?>

<!-- Scripts -->
<script src="assets/plugins/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/parallax.min.js"></script>
<script src="assets/js/navigation.js"></script>
<script src="assets/plugins/jquery.easing.js"></script>
<script src="assets/plugins/jquery.magnific-popup.min.js"></script>
<script src="assets/plugins/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/isotope.pkgd.min.js"></script>
<script src="assets/plugins/owl.carousel.min.js"></script>
<script src="assets/js/script.min.js"></script>