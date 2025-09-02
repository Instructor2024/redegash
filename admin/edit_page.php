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
</head>
<body>
<h2>Editando <?= htmlspecialchars($file) ?></h2>
<?php if ($message): ?><p style="color:green;">
    <?= htmlspecialchars($message) ?></p><?php endif; ?>
<a href="pages.php">&laquo; Volver</a>
<form method="post">
    <textarea name="content" rows="25" cols="100"><?= htmlspecialchars($current) ?></textarea><br>
    <button type="submit">Guardar</button>
</form>
</body>
</html>
