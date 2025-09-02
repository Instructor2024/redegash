<?php

include('header.php');

?>

<style>
  #contact .row>.col-md-6 {
    float: left;
    width: 50%;
    margin-bottom: 10px;
  }

  @media (max-width: 767px) {
    #contact .row>.col-md-6 {
      width: 100%;
    }
  }

  #pqr_city.loading {
    color: #6c757d;
  }

  /* Ajustes al iframe para que se adapte */
  #contact .contact-map iframe {
    margin: 20px;
    width: 80%;
    height: 400px;
    border: 0;
    border-radius: 4px;

  }

  .contact-form h2 {
    margin-bottom: 1rem;
    font-weight: 700;
    letter-spacing: .2px;
  }

  .form-bordered {
    border-radius: 6px;
    border: 1px solid #d9dee3;
    box-shadow: none;
  }

  .form-group label {
    font-weight: 600;
    color: #2c3e50;
  }

  .button.btn-square {
    border-radius: 6px;
    padding: .6rem 1.2rem;
  }
</style>
<!-- begin:main-title -->
<div class="main-title block-section padd-40-top padd-60-btm bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="main-title-primary">CONTACTO</h1>
        <!-- <h4 class="main-title-secondary">Contact the construction company.</h4> -->
      </div><!-- .col-## -->
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .main-title -->
<!-- end:main-title -->

<!-- begin:breadcrumb -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="#">Inicio</a></li>
          <li class="active">Contacto</li>
        </ol>
      </div><!-- .col-md-12 -->
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .site-breadcrumb -->
<!-- end:breadcrumb -->

<!-- begin:site-main -->
<div class="site-main">
  <!-- begin:block-section -->
  <div class="block-section">
    <div id="additional-info" class="additional-info block-section bg-grey padd-20-top padd-40-btm">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="contact-item">
              <div class="contact-item-icon">
                <i class="fa fa-phone"></i>
              </div>
              <!-- .contact-item-icon -->
              <h4 class="contact-item-title">Celular:</h4>
              <div class="contact-item-info">3144735971</div>
            </div>
            <!-- .contact-item -->
          </div>
          <!-- .col-# -->

          <div class="col-md-3 col-sm-6">
            <div class="contact-item">
              <div class="contact-item-icon">
                <i class="fa fa-envelope-o"></i>
              </div>
              <!-- .contact-item-icon -->
              <h4 class="contact-item-title">PQRS:</h4>
              <div class="contact-item-info">servicioalcliente.redegasH@gmail.com</div>

            </div>
            <!-- .contact-item -->
          </div>
          <!-- .col-# -->

          <div class="col-md-3 col-sm-6">
            <div class="contact-item">
              <div class="contact-item-icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <!-- .contact-item-icon -->
              <h4 class="contact-item-title">Dirección:</h4>
              <div class="contact-item-info">Km 8 vía Pitalito-Palestina </div>
            </div>
            <!-- .contact-item -->
          </div>
          <!-- .col-# -->

          <div class="col-md-3 col-sm-6">
            <div class="contact-item">
              <div class="contact-item-icon">
                <i class="fa fa-clock-o"></i>
              </div>
              <!-- .contact-item-icon -->
              <h4 class="contact-item-title">Horario de atención:</h4>
              <div class="contact-item-info">lunes a sábado 8.00am – 5:00pm </div>
            </div>
            <!-- .contact-item -->
          </div>
          <!-- .col-# -->
        </div>
        <!-- .row -->
      </div>
      <!-- container -->
    </div>

    <!-- begin:contact -->
    <section id="contact" class="contact block-section bg-white">
      <div class="container">
        <div class="row">

          <!-- Columna Mapa -->
          <div class="col-md-6 contact-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.900418237688!2d-76.0876936!3d1.7766083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e259f1f9b3259f3%3A0x378d7615a53b60ed!2sPitalito%20-%20Palestina%2C%20Huila!5e0!3m2!1ses!2sco!4v1754513065914!5m2!1ses!2sco"
              allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>

          <!-- Columna Formulario -->
          <!-- Columna Formulario (PQR) -->
          <div class="col-md-6 contact-form-wrapper">
            <form class="contact-form" id="pqrForm" novalidate>
              <h2>PQR DE USUARIOS</h2>

              <div class="form-group">
                <label for="pqr_name">Nombre Completo</label>
                <input type="text" id="pqr_name" name="nombre" class="form-control form-bordered"
                  placeholder="Nombre y apellido" required>
              </div>

              <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="pqr_email">Correo Electrónico</label>
                  <input type="email" id="pqr_email" name="correo" class="form-control form-bordered"
                    placeholder="tucorreo@dominio.com" required>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="pqr_phone">Teléfono / Celular</label>
                  <input type="tel" id="pqr_phone" name="telefono" class="form-control form-bordered"
                    placeholder="3001234567" required>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="pqr_id">Número de Identificación</label>
                  <input type="text" id="pqr_id" name="identificacion" class="form-control form-bordered"
                    placeholder="C.C. / NIT" required>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="pqr_city">Ciudad</label>
                  <select id="pqr_city" name="ciudad" class="form-control form-bordered" required>
                    <option value="" selected disabled>Cargando ciudades…</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="pqr_dept">Departamento</label>
                  <input type="text" id="pqr_dept" name="departamento" class="form-control form-bordered"
                    placeholder="Se completará automáticamente" readonly required>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="pqr_type">Tipo de Queja</label>
                  <select id="pqr_type" name="tipo_queja" class="form-control form-bordered" required>
                    <option value="" selected disabled>Seleccione un tipo de queja</option>
                    <option value="Servicio al Cliente">Servicio al Cliente</option>
                    <option value="Daño">Daño</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="pqr_message">Descripción</label>
                <textarea id="pqr_message" name="mensaje" class="form-control form-bordered" rows="6"
                  placeholder="Describe tu solicitud o inconformidad..." required></textarea>
              </div>

              <div class="form-group">
                <small class="text-muted d-block" style="line-height:1.4">
                  Al enviar este formulario aceptas el tratamiento de tus datos personales conforme a nuestra política
                  de privacidad.
                </small>
              </div>

              <button type="submit" class="button btn-square">Enviar PQR</button>

              <!-- Mensaje de éxito -->
              <div id="pqrSuccess" class="alert alert-success" role="alert" style="display:none; margin-top:12px;">
                ¡Gracias! Tu PQR fue registrado. Te contactaremos al correo suministrado.
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>
  </div><!-- .block-section -->
  <!-- end:block-section -->
</div><!-- .site-main -->
<!-- end:site-main -->

<?php

include('footer.php');

?>
<!-- end:footer -->

<!-- begin:copyright -->
<section id="copyright" class="copyright bg-black">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 copy-left">
        <p>Copyright &copy; 2018 <a href="http://templatespoint.net/"><strong>TemplatesPoint</strong></a>. All Right
          Reserved.</p>
      </div><!-- .col-sm-6 -->

      <div class="col-sm-6 copy-right">
        <ul class="social-icon">
          <li><a href="#" target="_blank" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" target="_blank" class="icon-facebook"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#" target="_blank" class="icon-youtube"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#" target="_blank" class="icon-instagram"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div><!-- .col-sm-6 -->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- #copyright -->
<!-- begin:copyright -->


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
<script src="assets/plugins/gmap3.min.js"></script>
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtR223ih2ZwVJX2SGBixD3p87Aa8RV2Is"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/script.min.js"></script>
<script>
  (async () => {
    const API_BASE = 'https://api-colombia.com/api/v1'; // fuente oficial
    const citySelect = document.getElementById('pqr_city');
    const deptInput = document.getElementById('pqr_dept');

    // Marcar estado de carga visualmente
    citySelect.classList.add('loading');

    try {
      // 1) Traer departamentos y mapear por id -> nombre
      const depsResp = await fetch(`${API_BASE}/Department`);
      if (!depsResp.ok) throw new Error('No se pudo cargar Departamentos');
      const departments = await depsResp.json();
      const depById = new Map(departments.map(d => [String(d.id), d.name]));

      // 2) Traer todas las ciudades (cada ciudad tiene departmentId)
      const citiesResp = await fetch(`${API_BASE}/City`);
      if (!citiesResp.ok) throw new Error('No se pudo cargar Ciudades');
      const cities = await citiesResp.json();

      // 3) Ordenar alfabéticamente por nombre de ciudad
      cities.sort((a, b) => a.name.localeCompare(b.name, 'es', { sensitivity: 'base' }));

      // 4) Poblar el <select> con <option value="cityId" data-dep="departmentId">
      citySelect.innerHTML = '<option value="" selected disabled>Seleccione una ciudad</option>';
      const frag = document.createDocumentFragment();
      for (const c of cities) {
        const opt = document.createElement('option');
        opt.value = c.id;             // guarda id ciudad
        opt.textContent = c.name;     // texto visible
        opt.dataset.dep = c.departmentId; // para lookup rápido
        frag.appendChild(opt);
      }
      citySelect.appendChild(frag);

      // 5) Al cambiar ciudad, rellenar Departamento y bloquear edición
      citySelect.addEventListener('change', () => {
        const opt = citySelect.options[citySelect.selectedIndex];
        const depId = opt?.dataset?.dep || '';
        deptInput.value = depById.get(depId) || '';
      });

    } catch (err) {
      console.error(err);
      // Fallback mínimo si hay error de red/API
      citySelect.innerHTML = `
      <option value="" selected disabled>Error cargando ciudades</option>
      <option value="Bogotá" data-dep="Cundinamarca">Bogotá</option>
      <option value="Medellín" data-dep="Antioquia">Medellín</option>
      <option value="Cali" data-dep="Valle del Cauca">Cali</option>
    `;
      citySelect.addEventListener('change', () => {
        const opt = citySelect.options[citySelect.selectedIndex];
        deptInput.value = opt?.dataset?.dep || '';
      });
    } finally {
      citySelect.classList.remove('loading');
    }
  })();
</script>
</body>

</html>