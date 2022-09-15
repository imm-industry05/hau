<?php
include 'config.php';
error_reporting(0);
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user_form WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result -> num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        
        if($row['user_type'] == 'user'){
            $_SESSION['user_name'] = $row['username'];
            header("location: ./userPage.php");
        }elseif($row['user_type'] == 'Admin'){
            $_SESSION['admin_name'] = $row['username'];
            header("location: ./adminPage.php");
        }else{
            echo "<script>alert('Woops! email and password is wrong.')</script>";
        }
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginpage2.css">
    <title>Login-Invntory System</title>
</head>
<body>
    <div class="loginContainer">
    <div class = "loginHeader">
        <h1>
            Login
        </h1>
        <p>
            IP - Inventory Project
        </p>
    </div>
        <div class = "loginBody">
                <form action="" method="POST">
                    <div class="loginInputContainer">
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <div class="loginInputContainer">
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>             
                    
                    <div class="loginButtonContainer">
                        <input type="submit" name="submit" value="Login" class="form-btn">    
                    </div>

                    <div class="accexist">
                        <p>
                        Don't have an account? <a href="forms/registerForm.php">Register now</a>
                        </p>
                    </div>

                </form>
        </div>
    </div>

</body>
</html>