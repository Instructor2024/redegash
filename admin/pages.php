<?php
require_once 'config.php';
require_login();

$baseDir = realpath(__DIR__ . '/..');
$pages = glob($baseDir . '/*.php');
$pages = array_filter($pages, function($p) {
    return strpos($p, '/admin/') === false;
});
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar páginas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Editar páginas</h2>
            <a href="index.php" class="btn btn-link"><i class="fas fa-arrow-left mr-1"></i>Volver</a>
            <ul class="list-group mt-3">
            <?php foreach ($pages as $p): ?>
                <li class="list-group-item">
                    <a href="edit_page.php?file=<?= urlencode(basename($p)) ?>">
                        <i class="fas fa-file-alt mr-1"></i><?= htmlspecialchars(basename($p)) ?>
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
