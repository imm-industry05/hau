<?php

$server = "db";
$user = "root";
$pass = "123";
$database = "user_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    die("<script>alert('Connection failed')</script>");
}




?>