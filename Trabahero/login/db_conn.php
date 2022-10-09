<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "trabahero_register";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}