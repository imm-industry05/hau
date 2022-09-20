<?php

$server = "db";
$user = "root";
$pass = "123";
$database = "user_db";

$conn = mysqli_connect($server, $user, $pass, $database);

session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:/InventorySystem/forms/loginPage.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/InventorySystem/css/employee.css">
    <title>Employee</title>
</head>
<body>
<ul>
<li><a class="active" href="/InventorySystem/adminPage.php">Dashboard <i class="fa-solid fa-bars"></i></a></li>
        <li><a href="#news">input</a></li>
        <li><a href="#contact">input</a></li>
        <li style="float:right"><a href="/InventorySystem/loginPage.php">Log out <i class="fa fa-arrow-right"></i></a></li>
</ul>     
<br/><br/>



    <div class="empContainer">
        <div class="inputEmployee">
         <div class="emp">
                <form action="/InventorySystem/forms/insertEmployee.php" method="POST">
                    <div class="inputEmp">
                        <input type="email" placeholder="Email" name="email" value="" required>
                    </div>
                    <div class="inputEmp">
                        <input type="text" placeholder="First name" name="fname" value="" required>
                 </div>
                    <div class="inputEmp">
                        <input type="text" placeholder="Last name" name="lname" value="" required>
                 </div>
                 <div class="inputEmp">
                     <input type="number" placeholder="Age" name="age" value="" required>
                    </div>

                 <div class="buttonsub">
                 <input type="submit" name="submit" value="Submit" class="form-btn">
                 </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>