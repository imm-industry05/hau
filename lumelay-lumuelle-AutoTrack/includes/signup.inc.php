<?php

 if (isset($_POST["submit"])) {

   $name = $_POST["name"];
   $email = $_POST["email"];
   $address = $_POST["address"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php'; // error handlers functions
   //
   //**error handlers**//
   // checking for empty input
   if (emptyInputSignup($name, $email, $address, $pwd, $pwdRepeat) !==false) {
     header("location: ../signup.php?error=emptyinput");
     exit();
   }
   //*********************************
   //checking for email if it is valid
   if (invalidEmail($email) !== false) {
     header("location: ../signup.php?error=invalidemail");
     exit();
   }
   //*******************************
   //checking password if they match
   if (pwdMatch($pwd, $pwdRepeat) !== false) {
     header("location: ../signup.php?error=invalidpassword");
     exit();
   }
   //*****************************************
   //checking if the account is already exists
   if (emailExists($conn, $email) !== false) {
     header("location: ../signup.php?error=accountexists");
     exit();
   }
   //******************************
   //Signing up the user in website
   createUser($conn, $name, $email, $address, $pwd);
 }
else {
  header("location: ../signup.php");
  exit();
}
