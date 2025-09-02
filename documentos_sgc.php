<?php include('header.php'); ?>

<style>
    /* Sección Normativa */
    #normativa {
        padding: 2rem 0;
    }

    /* Título centrado */
    #normativa h2 {
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
        height: 400px;
        border: 1px solid #ddd;
        border-radius: 4px;
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

    .pdf-actions {
        display: flex;
        gap: .5rem;
        margin-top: .75rem;
        flex-wrap: wrap;
    }

    .pdf-actions .btn {
        padding: .35rem .75rem;
    }
</style>

<!-- begin:main-title -->
<div class="main-title block-section padd-40-top padd-60-btm bg-grey text-center">
    <h1 class="main-title-primary">Documentos Sistema de Gestión de Calidad</h1>
</div>
<!-- end:main-title -->

<!-- begin:breadcrumb -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Documentos Sistema de Gestión de Calidad</li>
        </ol>
    </div>
</div>
<!-- end:breadcrumb -->

<!-- Normativa: Resolución y Documentos PDF en línea -->
<section id="normativa">
    <div class="container">

        <!-- Resolución centrada con tres columnas (vacia-contenido-vacia) -->


        <!-- Resto de documentos -->
        <h2>Documentos Sistema de Gestión de Calidad</h2>
        <div class="row">
            <div class="col-md-6 pdf-card" data-aos="fade-up">
                <h4>CÓDIGO BUEN GOBIERNO REDEGASH</h4>
                <iframe src="docs/SGC-COD-001_CODIGO_BUEN_GOBIERNO.pdf#toolbar=0" allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm" href="docs/SGC-COD-001_CODIGO_BUEN_GOBIERNO.pdf" download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>
            <div class="col-md-6 pdf-card" data-aos="fade-up" data-aos-delay="100">
                <h4>PROCEDIMIENTO DE VENTA PARA INSTALACIONES DE GAS COMBUSTIBLE</h4>
                <iframe src="docs/PR-COM-002_PROCEDIMIENTO_DE_VENTA_PARA_INSTALACIONES_DE_GAS_COMBUSTIBLE.pdf#toolbar=0"
                    allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm" href="docs/PR-COM-002_PROCEDIMIENTO_DE_VENTA_PARA_INSTALACIONES_DE_GAS_COMBUSTIBLE.pdf" download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>
            <div class="col-md-6 pdf-card" data-aos="fade-up" data-aos-delay="200">
                <h4>Instructivo técnico para la construcción de redes de distribución de gas combustible</h4>
                <iframe src="docs/CO-IN-001_INSTRUCTIVO_REDES_EXTERNAS_Y_ACOMETIDAS.pdf#toolbar=0"
                    allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm" href="docs/CO-IN-001_INSTRUCTIVO_REDES_EXTERNAS_Y_ACOMETIDAS.pdf" download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>

            <div class="col-md-6 pdf-card" data-aos="fade-up" data-aos-delay="200">
                <h4>Manual de Construcción de Instalaciones Internas para Gas Combustible</h4>
                <iframe
                    src="docs/MN-CNS-001_MANUAL_DE_CONSTRUCCION_DE_INSTALACIONES_RESIDENCIALES_Y_COMERCIALES.pdf#toolbar=0"
                    allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm" href="docs/MN-CNS-001_MANUAL_DE_CONSTRUCCION_DE_INSTALACIONES_RESIDENCIALES_Y_COMERCIALES.pdf" download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include('footer.php'); ?>