<?php

$server = "db";
$user = "root";
$pass = "123";
$database = "user_db";

$conn = mysqli_connect($server, $user, $pass, $database);

session_start();
session_unset();
session_destroy();

header('location:/InventorySystem/forms/loginPage.php');
?>