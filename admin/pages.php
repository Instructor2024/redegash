<?php
require_once 'config.php';
require_login();

$baseDir = realpath(__DIR__ . '/..');
$pages = glob($baseDir . '/*.php');
// Excluir archivos del panel
$pages = array_filter($pages, function($p) {
    return strpos($p, '/admin/') === false;
});
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar páginas</title>
</head>
<body>
<h2>Editar páginas</h2>
<a href="index.php">&laquo; Volver</a>
<ul>
<?php foreach ($pages as $p): ?>
    <li><a href="edit_page.php?file=<?= urlencode(basename($p)) ?>"><?= htmlspecialchars(basename($p)) ?></a></li>
<?php endforeach; ?>
</ul>
</body>
</html>
