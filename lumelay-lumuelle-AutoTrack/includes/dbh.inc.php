<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "front-inprogress"; //Put Project name here

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Error: " . mysqli_connect_error()); //error message
}
