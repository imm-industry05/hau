<?php

$server = "database";
$user = "root";
$pass = "123";
$database = "inventory_db";

$conn = mysqli_connect($server, $user, $pass, $database);


session_start();
session_unset();
session_destroy();

header("location: /Login.php");







?>
