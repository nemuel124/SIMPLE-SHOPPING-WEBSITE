<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "myuserinfo_db";

    $conn = new mysqli($host, $username, $password, $db);

    if(!$conn){
        die('Connection failed'.$conn->connect_error);
    } 
    ?>