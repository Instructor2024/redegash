<?php
require_once 'config.php';
require_login();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Panel Administrativo</h2>
            <ul class="list-unstyled">
                <li><a class="btn btn-link" href="images.php"><i class="fas fa-image mr-1"></i>Reemplazar imágenes</a></li>
                <li><a class="btn btn-link" href="pages.php"><i class="fas fa-file-alt mr-1"></i>Editar páginas</a></li>
                <li><a class="btn btn-link text-danger" href="logout.php"><i class="fas fa-sign-out-alt mr-1"></i>Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
