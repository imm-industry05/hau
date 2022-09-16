<?php
include 'config.php';
error_reporting(0);
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    if($password == $cpassword){
        $sql = "SELECT * FROM user_form WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);

        if(!$result -> num_rows > 0){
            $sql = "INSERT INTO user_form(name, email, password, user_type) VALUES('$username', '$email', '$password', '$user_type')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('wow! user registered')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("location: http://localhost/InventorySystem/forms/loginForm.php");
            }else{
                echo "<script>alert('Woops! something wrong')</script>";
            }  
            }else{
                echo "<script>alert('Woops! email already exist')</script>";
            }    
             }else{ 
                 echo "<script>alert('Password not matched.')</script>";
            }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/InventorySystem/css/loginpage2.css">
    <title>Register-Invntory System</title>
</head>
<body>
    <div class="loginContainer">
    <div class = "loginHeader">
        <h1>
            Register
        </h1>
        <p>
            IP - Inventory Project
        </p>
    </div>
        <div class = "loginBody">
                <form action="" method="POST">
                    <?php
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<span class="error-msg">'.$error.'</span>';
                            }
                        }
                    
                    
                    ?>
                    <div class="loginInputContainer">
                        <input type="text" placeholder="Username"  name="name" value="<?php echo $username; ?>" required>
                    </div>

                    <div class="loginInputContainer">
                        <input type="email"  placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <div class="loginInputContainer">
                        <input type="password"  placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>

                    <div class="loginInputContainer">
                        <input type="password"  placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                    </div>

                    <div class="loginInputContainer">
                    <select name="user_type">
                        <option value="user">User</option>
                        <option value="Admin">Admin</option>
                    </select>
                    </div>
                    
                    <div class="loginButtonContainer">
                        <input type="submit" name="submit" value="Lets go" class="form-btn">    
                    </div>

                    <div class="accexist">
                        <p>
                        Already have an account? <a href="http://localhost/InventorySystem/forms/loginForm.php">Login now</a>
                        </p>
                    </div>

                </form>
        </div>
    </div>

</body>
</html>