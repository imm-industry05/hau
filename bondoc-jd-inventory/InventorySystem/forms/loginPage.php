<?php
include 'config.php';
error_reporting(0);
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $sql = "SELECT * FROM user_form WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);




    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
  
        if($row['user_type'] == 'Admin'){
  
           $_SESSION['admin_name'] = $row['name'];
           header('location:/InventorySystem/adminPage.php');
  
        }elseif($row['user_type'] == 'user'){
  
           $_SESSION['user_name'] = $row['name'];
           header('location:/InventorySystem/userStatic.php');
  
        }
       
     }else{
        echo "<script>alert('Password or Email not matched.')</script>";
     }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/InventorySystem/css/loginpage2.css">
    <title>Login-Inventory System</title>
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
                        Don't have an account? <a href="/InventorySystem/forms/registerForm.php">Register now</a>
                        </p>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>