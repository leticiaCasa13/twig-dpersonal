<?php
require_once 'vendor/autoload.php';

// Configurar Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

// Renderizar la plantilla
echo $twig->render('index.twig');
?>

