<?php
session_start();
require "vendor/autoload.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = sql_format('SELECT * FROM `users` WHERE email="?" AND password="?"',array($email,$password));

    // Execute the query
    $result = $db->query($sql);
    // Check for errors
    if (!$result) {
        exit();
    }

    if ($result->num_rows >= 1) {
        $row = $result->fetch_row();
        // Successful login, set a session variable to indicate the user is logged in
        $_SESSION["loggedin"] = true;
        $_SESSION['UserName'] = $row[3];
        header("Location: index.php"); // Redirect to a welcome page
    } else {
        // Invalid credentials, display an error message
        $error_message = "Invalid username or password.";
    }
}

$loader = new \Twig\Loader\FilesystemLoader('resources/twing_templates/Sig_in_page(login_page)');

$twig = new \Twig\Environment($loader
//, ['cache' => 'cache/compilation_cache',]
);
echo $twig->render('index.html');

?>
