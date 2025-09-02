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
</style>

<!-- begin:main-title -->
<div class="main-title block-section padd-40-top padd-60-btm bg-grey text-center">
    <h1 class="main-title-primary">Normativa</h1>
</div>
<!-- end:main-title -->

<!-- begin:breadcrumb -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Normativa</li>
        </ol>
    </div>
</div>
<!-- end:breadcrumb -->

<!-- Normativa: Resolución y Documentos PDF en línea -->
<section id="normativa">
    <div class="container">

        <!-- Resolución centrada con tres columnas (vacia-contenido-vacia) -->
        <h2>Resolución CREG 080 de 2019</h2>
        <div class="row">
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-8 pdf-main-card" data-aos="fade-up">
                <iframe src="docs/resolucion.pdf#toolbar=0" allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm" href="docs/resolucion.pdf" download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>

        <!-- Resto de documentos -->
        <h2>Políticas</h2>
        <div class="row">
            <div class="col-md-6 pdf-card" data-aos="fade-up">
                <h4>Política de Seguridad y Movilidad Vial (PO-GE-001)</h4>
                <iframe src="docs/PO-GE-001_POLITICA_DE_SEGURIDAD_Y_MOVILIDAD_VIAL.pdf#toolbar=0"
                    allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm" href="docs/PO-GE-001_POLITICA_DE_SEGURIDAD_Y_MOVILIDAD_VIAL.pdf"
                        download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>
            <div class="col-md-6 pdf-card" data-aos="fade-up" data-aos-delay="100">
                <h4>Política de Seguridad y Salud en el Trabajo (PO-GE-002)</h4>
                <iframe src="docs/PO-GE-002_POLITICA_DE_SEGURIDAD_Y_SALUD_EN_EL_TRABAJO.pdf#toolbar=0"
                    allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm"
                        href="docs/PO-GE-002_POLITICA_DE_SEGURIDAD_Y_SALUD_EN_EL_TRABAJO.pdf" download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>
            <div class="col-md-6 pdf-card" data-aos="fade-up" data-aos-delay="200">
                <h4>Política Prevención Consumo de Alcohol y Sustancias (PO-GE-003)</h4>
                <iframe src="docs/PO-GE-003_POLITICA_PREVENCION_CONSUMO_ALCOHOL_SUSTANCIAS.pdf#toolbar=0"
                    allowfullscreen></iframe>
                <div class="pdf-actions">
                    <a class="btn btn-success btn-sm"
                        href="docs/PO-GE-003_POLITICA_PREVENCION_CONSUMO_ALCOHOL_SUSTANCIAS.pdf" download>
                        <i class="bi bi-download"></i> Descargar PDF
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include('footer.php'); ?>