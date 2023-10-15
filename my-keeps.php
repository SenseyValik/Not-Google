<?php
require "vendor/autoload.php";

$username = $_SESSION['UserName'];
$loader = new \Twig\Loader\FilesystemLoader('resources/twing_templates/my-keeps');

$twig = new \Twig\Environment($loader
//, ['cache' => 'cache/compilation_cache',]
);

echo $twig->render('my-keeps.html');
