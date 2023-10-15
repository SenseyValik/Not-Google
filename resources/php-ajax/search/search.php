<?php

require $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_content = $_POST["search_content"];
    $userId = $_POST["userId"];

    $sql = sql_format('SELECT title,content FROM `notes` WHERE userId=? and content like "%?%" order by datecreate limit 20',array($userId,$search_content));
    $result = $db->query($sql);


    if(!$result){
        exit();
    }

   echo json_encode(mysqli_fetch_all($result));

}
