<?php
session_start();
require "vendor/autoload.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["username"];
    $password = $_POST["password"];

    $sql = sql_format('SELECT COUNT(id) FROM `users` WHERE email="?" AND password="?"',array($email,$password));

    // Execute the query
    $result = $db->query($sql);
    // Check for errors
    if (!$result) {
        exit();
    }

    $row = $result->fetch_row();

    if ($row[0] > 1) {
        // Successful login, set a session variable to indicate the user is logged in
        $_SESSION["loggedin"] = true;
        header("Location: index.php"); // Redirect to a welcome page
    } else {
        // Invalid credentials, display an error message
        $error_message = "Invalid username or password.";
    }
}


//$loader = new \Twig\Loader\FilesystemLoader('resources/twing_templates');
//
//$twig = new \Twig\Environment($loader
////, ['cache' => 'cache/compilation_cache',]
//);
//echo $twig->render('index.html');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Login</h2>
    <form action="singIn.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<!-- Link to Bootstrap JS and jQuery (for Bootstrap functionality) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
