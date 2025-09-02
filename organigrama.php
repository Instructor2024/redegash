<?php include('header.php'); ?>

<style>
    /* Sección mapa_procesos */
    #mapa_procesos {
        padding: 2rem 0;
    }

    /* Título centrado */
    #mapa_procesos h2 {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    /* Tarjeta principal centrada */
    .pdf-main-card {
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin-bottom: 2rem;
    }

    .pdf-main-card iframe {
        width: 100%;
        height: 90vh;
        /* ocupa el 90% de la altura visible */
        border: none;
    }

    /* Resto de documentos */
    .pdf-card {
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin-bottom: 2rem;
    }

    .pdf-card h4 {
        font-size: 1.1rem;
        margin-bottom: 0.75rem;
        color: #2c3e50;
    }

    .pdf-card iframe {
        width: 100%;
        height: 400px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
</style>

<!-- begin:main-title -->
<div class="main-title block-section padd-40-top padd-60-btm bg-grey text-center">
    <h1 class="main-title-primary">Organigrama</h1>
</div>
<!-- end:main-title -->

<!-- begin:breadcrumb -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Organigrama</li>
        </ol>
    </div>
</div>
<!-- end:breadcrumb -->

<!-- Normativa: Resolución y Documentos PDF en línea -->
<section id="mapa_procesos">
    <div class="container">

        <!-- Resolución centrada con tres columnas (vacia-contenido-vacia) -->
        <h2>Organigrama</h2>
        <div class="row">
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-12 pdf-main-card" data-aos="fade-up">
                <iframe src="docs/organigrama.pdf#toolbar=0&zoom=100" allowfullscreen
                    style="width: 100%; height: 800px; border: none;">
                </iframe>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>

    </div>
</section>

<?php include('footer.php'); ?>