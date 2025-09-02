<?php
session_start();
require_once __DIR__ . '/config/database.php';

// Lista de páginas permitidas
$allowedPages = ['home','ofertas','servicios','conocenos','perfil','login','crear'];

// Obtener el parámetro "page" de la URL
$page = $_GET['page'] ?? 'home';

// Validar que la página esté permitida
if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

// Incluir header
include __DIR__ . '/views/template/header.php';

// Incluir la vista correspondiente
$file = __DIR__ . "/views/{$page}.php";
if (file_exists($file)) {
    include $file;
} else {
    include __DIR__ . '/views/inicio.php';
}

// Incluir footer
include __DIR__ . '/views/template/footer.php';
?>
