<?php

// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mindeskeep';

$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$db) {
    echo 'error';
    die("Connection failed: " . mysqli_connect_error());
}

function str_replace_once($search, $replace, $text)
{
    $pos = strpos($text, $search);
    return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
}

function sql_format($sql, $array){

    foreach ($array as $value){
        $sql = str_replace_once('?', $value, $sql);
    }
    return $sql;
}

?>