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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Reemplazar imágenes</h2>
            <a href="index.php" class="btn btn-link"><i class="fas fa-arrow-left mr-1"></i>Volver</a>
            <?php if ($message): ?><div class="alert alert-success mt-2"><?= htmlspecialchars($message) ?></div><?php endif; ?>
            <div class="row mt-3">
            <?php foreach ($images as $idx => $img): 
                $rel = str_replace($baseDir.'/', '', $img);
            ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../imagenes/<?= htmlspecialchars($rel) ?>" class="card-img-top" alt="<?= htmlspecialchars($rel) ?>">
                        <div class="card-body">
                            <p class="card-text small"><?= htmlspecialchars($rel) ?></p>
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="target" value="<?= htmlspecialchars($img) ?>">
                                <div class="form-group">
                                    <input type="file" name="new_image" accept="image/*" class="form-control-file" onchange="previewImage(event,'preview<?= $idx ?>')" required>
                                </div>
                                <img id="preview<?= $idx ?>" style="max-width:100%;display:none;margin-bottom:10px;">
                                <button type="submit" class="btn btn-primary btn-sm">Reemplazar</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script>
function previewImage(event,id){
    const img=document.getElementById(id);
    const file=event.target.files[0];
    if(file){
        img.src=URL.createObjectURL(file);
        img.style.display='block';
    }else{
        img.style.display='none';
    }
}
</script>
</body>
</html>
