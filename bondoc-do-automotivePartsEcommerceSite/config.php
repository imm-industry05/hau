<?php 

$server = "";
$user = "root";
$pass = "";
$database = "login_php";

$conn = mysqli_connect($server, $user, $pass, $database);


if(!$conn->connect_error){
    die("<script>alert('Connection Failed')</script>");
}
echo "Connection Successful";

?>