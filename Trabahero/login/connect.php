<?php
        $fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$bday=$_POST['bday'];
		$sex=$_POST['sex'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		
        $conn = new mysqli('localhost', 'root', '', 'trabahero_register');
        if($conn->connect_error){
            die('Connection Failed  : '.$conn->connect_error);
        
        }else{
            $stmt = $conn->prepare("insert into register_form(fname, lname, bday, sex, username, email, pass) 
                values(?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssss", $fname, $lname, $bday, $sex, $username, $email, $pass);
                $stmt->execute();
                header("Location: ../index.html"); ;
                $stmt->close();
                $conn->close();
        }
?>