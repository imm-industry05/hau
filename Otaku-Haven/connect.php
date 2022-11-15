<?php

$dbhost = "db";
$dbuser = "root";
$dbpass = "123";
$dbname = "login_otaku_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{

	die("failed to connect!");
}
