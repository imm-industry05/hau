<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "hoteli";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("connection failed");
    }
?>