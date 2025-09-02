<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="REDEGAS DEL SUR S.A.S E.S.P servicio de gas domiciliario al departamento del Huila  " />
  <meta name="keywords" content="servicio de gas, REDEGAS DEL SUR S.A.S E.S.P,  " />
  <meta name="author" content="templateninja" />
  <title>REDEGASH DEL SUR S.A.S E.S.P.</title>

  <!-- Bootstrap -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet" />
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/Pe-icon-7-stroke.css" rel="stylesheet" />
  <link href="assets/css/owl.carousel.css" rel="stylesheet" />
  <link href="assets/css/owl.theme.css" rel="stylesheet" />
  <link href="assets/css/magnific-popup.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.min.css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="assets/plugins/html5shiv.min.js"></script>
      <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->

  <style>
    /* Añadimos overlay oscuro para mejorar contraste */
    #header {
      position: relative;
      overflow: hidden;
    }

    #header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .header-caption {
      position: relative;
      z-index: 2;
      color: #fff;
      /* Texto blanco */
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
      padding: 20px;
      background: rgba(0, 0, 0, 0.2);
      border-radius: 8px;
    }

    .caption-subtitle {
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
      opacity: 0.9;
    }

    .caption-title {
      margin: 0.5em 0;
      line-height: 1.3;
    }

    .header-action-button .btn {
      margin-right: 10px;
      z-index: 2;
    }


    .whatsapp-float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 20px;
      right: 20px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50%;
      text-align: center;
      font-size: 30px;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .whatsapp-float i {
      margin-top: 15px;
    }
  </style>
  <script>
    (function () {
      var header = document.querySelector('.site-header.header-dark');
      if (!header) return;
      var toggleShadow = function () {
        if (window.scrollY > 10) {
          header.style.boxShadow = '0 6px 18px rgba(0,0,0,.28)';
        } else {
          header.style.boxShadow = '0 2px 12px rgba(0,0,0,.25)';
        }
      };
      window.addEventListener('scroll', toggleShadow);
      toggleShadow();
    })();
  </script>
</head>

<body id="home" class="home">
  <a href="https://wa.me/3144735971" class="whatsapp-float" target="_blank" aria-label="Chat WhatsApp">
    <i class="fa fa-whatsapp"></i>
  </a>
  <!-- begin:header -->
  <div class="header" data-parallax="scroll" data-image-src="imagenes/head.jpg">
    <!-- begin:topbar -->
    <div id="topbar" class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="nav-utility">
              <span class="nav-item">REDEGAS DEL SUR S.A.S E.S.P. - 3144735971 - Km 8 vía
                Pitalito-Palestina
              </span>
            </div>
            <!-- .nav-utility -->
          </div>
          <!-- .col-sm-8 -->
          <div class="col-sm-4 hidden-xs">
            <div class="nav-utility nav-right">
              <a href="#" class="nav-item"><i class="fa fa-twitter"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-facebook"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-linkedin"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-envelope-o"></i></a>
            </div>
            <!-- .nav-utility -->
          </div>
          <!-- .col-sm-4 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- .topbar -->
    <!-- end:topbar -->

    <!-- begin:site-navigation -->
    <div class="site-header-affix-wrapper">
      <header id="masthead" class="site-header" role="banner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="site-branding">
                <h1 class="site-title title-image">
                  <a href="index-2.html" rel="home"><img src="imagenes/logo.png" alt="construction business"
                      class="img-responsive" /></a>
                </h1>
              </div>
              <!-- .site-branding -->
            </div>
            <!-- .col-sm-3 -->

            <div class="col-sm-9">
              <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
                  <span class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span>
                </button>

                <div class="menu-testing-menu-container">
                  <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                    <li class="menu-item current-menu-item">
                      <a href="index.php">Inicio</a>
                    </li>
                    <li class="menu-item"><a href="about.php">Quienes Somos</a></li>
                    <li class="menu-item menu-item-has-children" aria-haspopup="true">
                      <a href="service.php">Servicios</a>
                      <ul class="sub-menu">
                        <li class="menu-item current-menu-item">
                          <a href="service.php">Todos Servicios</a>
                        </li>
                        <!-- 
                          <li class="menu-item">
                            <a href="service-item.php"
                              >Construction Consultant</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="service-item.php">General Contracting</a>
                          </li>
                          <li class="menu-item">
                            <a href="service-item.php">House Renovation</a>
                          </li>
                          <li class="menu-item">
                            <a href="service-item.php"
                              >Construction Management</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="service-item.php">Design and Build</a>
                          </li>
                          -->
                      </ul>
                    </li>

                    <li class="menu-item">
                      <a href="project.php">Proyectos</a>

                    </li>

                    <li class="menu-item menu-item-has-children" aria-haspopup="true">
                      <a href="normativa.php">Normativa</a>
                      <ul class="sub-menu">
                        <li class="menu-item ">
                          <a href="mapa_procesos.php">Mapa de Procesos</a>
                        </li>

                        <li class="menu-item">
                          <a href="organigrama.php">Organigrama</a>
                        </li>
                        <li class="menu-item">
                          <a href="documentos_sgc.php">Documentos Sistema de Gestión de Calidad</a>
                        </li>
                      </ul>
                    </li>
                    <!-- #region 
                      <li class="menu-item"><a href="blog.php">Blog</a></li>
                      -->
                    <li class="menu-item">
                      <a href="contact.php">Contacto</a>
                    </li>
                  </ul>
                </div>
              </nav>
              <!-- #site-navigation -->
            </div>
            <!-- .col-sm-9 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </header>
      <!-- #masthead -->
    </div>
    <!-- .site-header-affix-wrapper -->
    <!-- end:site-navigation -->