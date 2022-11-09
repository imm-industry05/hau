<?php

$sname= "database";
$unmae= "ci";
$password = "ci";

$db_name = "useraccounts";


$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>