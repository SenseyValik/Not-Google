<?php
require "vendor/autoload.php";


$loader = new \Twig\Loader\FilesystemLoader('resources/twing_templates');

$twig = new \Twig\Environment($loader
    //, ['cache' => 'cache/compilation_cache',]
);

echo $twig->render('index.html');

?>



