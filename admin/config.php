<?php
session_start();

// Credenciales por defecto
const ADMIN_USER = 'admin';
const ADMIN_PASS = 'admin123';

// Funcion de verificacion de acceso
function require_login() {
    if (empty($_SESSION['logged_in'])) {
        header('Location: login.php');
        exit();
    }
}
?>
