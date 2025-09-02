<?php
require_once 'config.php';
require_login();

$baseDir = realpath(__DIR__ . '/..');
$file = $_GET['file'] ?? '';
$path = realpath($baseDir . '/' . $file);
if (!$file || strpos($path, $baseDir) !== 0 || !is_file($path)) {
    die('Archivo no válido');
}
$message='';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';
    file_put_contents($path, $content);
    $message = 'Archivo actualizado';
}
$current = file_get_contents($path);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editando <?= htmlspecialchars($file) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Editando <?= htmlspecialchars($file) ?></h2>
            <?php if ($message): ?><div class="alert alert-success"><?= htmlspecialchars($message) ?></div><?php endif; ?>
            <a href="pages.php" class="btn btn-link"><i class="fas fa-arrow-left mr-1"></i>Volver</a>
            <form method="post" class="mt-3">
                <div class="form-group">
                    <textarea name="content" rows="20" class="form-control" style="font-family: monospace;">
<?= htmlspecialchars($current) ?>
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
