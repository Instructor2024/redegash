<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="construction is awesome bootstrap responsive construction business theme">
  <meta name="keywords" content="construction, business, construction business, responsive, parallax, business theme">
  <meta name="author" content="templateninja">
  <title>REDEGASH</title>

  <!-- Bootstrap -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/Pe-icon-7-stroke.css" rel="stylesheet">
  <link href="assets/css/owl.carousel.css" rel="stylesheet">
  <link href="assets/css/owl.theme.css" rel="stylesheet">
  <link href="assets/css/magnific-popup.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="assets/plugins/html5shiv.min.js"></script>
      <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
  <style>
    #beneficios {
      background: #f1f5f9;
      padding: 60px 0;
    }

    .benefits-row {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .benefit-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      max-width: 300px;
      margin-bottom: 40px;
      margin-top: 30px;
    }

    .benefit-circle {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      color: #000;
      flex-shrink: 0;
      padding: 1rem;
      box-sizing: border-box;
    }

    .icon-badge {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      top: -15px;
      left: 50%;
      transform: translateX(-50%);
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }



    .benefit-text {
      font-weight: 600;
      font-size: 1.5rem;
      margin-top: 0.5rem;
      color: black;
    }

    .benefit-desc {
      margin-top: 15px;
      color: #6c757d;
      line-height: 1.6;
      font-size: 1.95rem;
    }



    .service-card img {
      width: 100%;
      height: 200px;
      /* ajusta la altura fija que desees */
      object-fit: cover;
      /* recorta o expande para llenar sin deformar */
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

<body id="home">
  <a href="https://wa.me/3144735971" class="whatsapp-float" target="_blank" aria-label="Chat WhatsApp">
    <i class="fa fa-whatsapp"></i>
  </a>
  <!-- begin:header -->
  <div class="header header-page">
    <!-- begin:topbar -->
    <div id="topbar" class="topbar topbar-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="nav-utility">
              <span class="nav-item">REDEGAS DEL SUR S.A.S E.S.P. - 3144735971 - Km 8 vía
                Pitalito-Palestina
              </span>
            </div><!-- .nav-utility -->
          </div><!-- .col-sm-8 -->
          <div class="col-sm-4 hidden-xs">
            <div class="nav-utility nav-right">
              <a href="#" class="nav-item"><i class="fa fa-twitter"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-facebook"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-linkedin"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="nav-item"><i class="fa fa-envelope-o"></i></a>
            </div><!-- .nav-utility -->
          </div><!-- .col-sm-4 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .topbar -->
    <!-- end:topbar -->

    <!-- begin:site-navigation -->
    <div class="site-header-affix-wrapper">
      <header id="masthead" class="site-header header-dark" role="banner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="site-branding">
                <h1 class="site-title title-image">
                  <a href="index.php" rel="home">
                    <img src="imagenes/logo2.jpg" alt="REDEGAS" class="img-responsive">
                  </a>
                </h1>
              </div><!-- .site-branding -->
            </div><!-- .col-sm-3 -->

            <div class="col-sm-9">
              <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false"><span
                    class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span></button>

                <div class="menu-testing-menu-container">
                  <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                    <li class="menu-item"><a href="index.php">Inicio</a></li>
                    <li class="menu-item "><a href="about.php">QUIENES SOMOS </a></li>
                    <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="service.php">Servicio</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="service.php">Todos los Servicios</a></li>

                      </ul>
                    </li>

                    <li class="menu-item"><a href="project.php">Proyectos</a></li>
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
                    <!-- #region <li class="menu-item"><a href="blog.php">Blog</a></li>-->
                    <li class="menu-item"><a href="contact.php">Contacto</a></li>
                  </ul>
                </div>
              </nav><!-- #site-navigation -->
            </div><!-- .col-sm-9 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </header><!-- #masthead -->
    </div><!-- .site-header-affix-wrapper -->
    <!-- end:site-navigation -->
  </div><!-- #header -->
  <!-- end:header --></ul>