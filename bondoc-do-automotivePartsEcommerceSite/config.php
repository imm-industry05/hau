<?php 

$server = "database";
$user = "root";
$pass = "123";
$database = "inventory_db";

$conn = mysqli_connect($server, $user, $pass, $database);


if(!$conn){
    die("<script>alert('Connection failed')</script>");
}

?>