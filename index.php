<?php
session_start();
define('ROOTPATH', __DIR__);

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: singIn.php");
    exit;
}

require "vendor/autoload.php";

$username = $_SESSION['UserName'];
$userId = $_SESSION['userId'];
$loader = new \Twig\Loader\FilesystemLoader('resources/twing_templates/Search_page');

$twig = new \Twig\Environment($loader
    //, ['cache' => 'cache/compilation_cache',]
);

echo $twig->render('index.html', ['username' => $username, 'userId' => $userId]);

?>



