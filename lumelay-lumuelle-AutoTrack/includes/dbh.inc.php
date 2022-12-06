<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "lumelay-lumuelle-autotrack"; //Put Project name here

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Error: " . mysqli_connect_error()); //error message
}
