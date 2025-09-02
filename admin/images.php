<?php
require_once 'config.php';
require_login();

$baseDir = realpath(__DIR__ . '/../imagenes');
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target = $_POST['target'] ?? '';
    if ($target && is_file($target)) {
        $realTarget = realpath($target);
        if (strpos($realTarget, $baseDir) === 0 && !empty($_FILES['new_image']['tmp_name'])) {
            move_uploaded_file($_FILES['new_image']['tmp_name'], $realTarget);
            $message = 'Imagen reemplazada';
        }
    }
}

function get_images($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file->getFilename())) {
            $files[] = $file->getPathname();
        }
    }
    return $files;
}

$images = get_images($baseDir);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reemplazar imágenes</title>
</head>
<body>
<h2>Reemplazar imágenes</h2>
<?php if ($message): ?><p style="color:green;"><?= htmlspecialchars($message) ?></p><?php endif; ?>
<a href="index.php">&laquo; Volver</a>
<ul>
<?php foreach ($images as $img): ?>
    <li>
        <?= htmlspecialchars(str_replace($baseDir.'/', '', $img)) ?>
        <form method="post" enctype="multipart/form-data" style="display:inline;">
            <input type="hidden" name="target" value="<?= htmlspecialchars($img) ?>">
            <input type="file" name="new_image" required>
            <button type="submit">Reemplazar</button>
        </form>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
