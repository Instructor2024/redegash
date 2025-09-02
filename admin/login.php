<?php
require_once 'config.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit();
    } else {
        $error = 'Credenciales inválidas';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
</head>
<body>
<h2>Panel Administrativo - Ingresar</h2>
<?php if ($error): ?>
<p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
<form method="post">
    <label>Usuario: <input type="text" name="username"></label><br>
    <label>Contraseña: <input type="password" name="password"></label><br>
    <button type="submit">Entrar</button>
</form>
</body>
</html>
