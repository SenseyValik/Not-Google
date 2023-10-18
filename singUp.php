<?php
require "vendor/autoload.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];

    if(empty($name)){
        $name = 'User';
    }
    $sql = sql_format('SELECT id FROM `users` WHERE email="?"',array($email));
    $result = $db->query($sql);

    if ($result->num_rows >= 1) {
        header("Location: singIn.php");
        exit();
    }

    $sql = sql_format('INSERT INTO `users` (`email`, `password`, `name`) VALUES ("?", "?", "?")',  array($email, $password, $name));
    $result = $db->query($sql);
    if ($result) {
        session_start();
        // Successful login, set a session variable to indicate the user is logged in
        $_SESSION['UserName'] = $name;
        $_SESSION["loggedin"] = true;
        header("Location: index.php");
        exit();
    }
}

$loader = new \Twig\Loader\FilesystemLoader('resources/twing_templates/Sign_up_page');

$twig = new \Twig\Environment($loader
//, ['cache' => 'cache/compilation_cache',]
);
echo $twig->render('index.html');