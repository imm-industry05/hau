<?php
$server = "localhost";
$user = "root";
$pass = "123";
$database = "user_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    die("<script>alert('Connection failed')</script>");
}

$rollno=$_POST['rn'];
$query= "DELETE FROM user_employee WHERE email = '$rollno'";

$result = mysqli_query($conn, $query);
if($result){
    echo "record deleted from data base";
}else{
    echo "record not deleted from data base";
}
?>