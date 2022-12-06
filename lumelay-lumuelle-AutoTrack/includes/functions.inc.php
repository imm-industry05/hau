<?php
// functions page for error handler
//********************************
//********************************
// checking for empty input
function emptyInputSignup($name, $email, $address, $pwd, $pwdRepeat) {
  $result;
  if (empty($name) || empty($email) || empty($address) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
//*********************************
//checking for email if it is valid
function invalidEmail($email) {
  $results;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
//*******************************
//checking password if they match
function pwdMatch($pwd, $pwdRepeat) {
  $results;
  if ($pwd !== $pwdRepeat) { //<<-- Check if $pwd and $pwdRepeat have the same inputs
        $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
//*****************************************
//checking if the account is already exists
function emailExists($conn, $email) {
  $sql = "SELECT * FROM users WHERE usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}
//******************************
//Signing up the user in website
function createUser($conn, $name, $email, $address, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersAddress, usersPwd) VALUES (?, ?, ?, ?);"; //Inserting the data into the database
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); //To secure the users password

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $address, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../login.php");
  exit();
}

//*****************
// for login system
// checking for empty input
function emptyInputLogin($email, $pwd) {
  $result;
  if (empty($email) || empty($pwd)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
//
//function for login system
//checking if the account exists
function loginUser($conn, $email, $pwd) {
  $emailExists = emailExists($conn, $email);

  if ($emailExists === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  //
  //verifying the password in the database
  $pwdHashed = $emailExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ../login.php?error=incorrectpassword");
    exit();
  }
  elseif ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $emailExists["usersId"];
    $_SESSION["useremail"] = $emailExists["usersEmail"];
    header("location: ../main.php");
    exit();
  }
}
