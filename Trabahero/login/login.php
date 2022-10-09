<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['pass']);
	if (empty($username)) {
		header("Location: login.html?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.html?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM register_form WHERE username='$username' AND pass='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['pass'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['fname'] = $row['fname'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: profile/profile.php");
		        exit();
            }else{
				header("Location: html.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.html?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.html");
	exit();
}?>