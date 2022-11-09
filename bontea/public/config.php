<?php

$sname = "database";
$uname = "ci";
$password = "ci";

$db_name = "useraccounts";

$db = new PDO('mysql:host=database;dbname=' . $db_name . ';$charset-utf8', $uname, $password);
$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>