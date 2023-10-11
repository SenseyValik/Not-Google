<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.html");
    exit;
}

require "vendor/autoload.php";


$loader = new \Twig\Loader\FilesystemLoader('resources/twing_templates');

$twig = new \Twig\Environment($loader
    //, ['cache' => 'cache/compilation_cache',]
);

echo $twig->render('index.html');

?>



