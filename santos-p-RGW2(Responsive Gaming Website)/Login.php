<?php
include 'config.php';
error_reporting(0);
session_start();

if (isset($_POST['login'])){

    $username1 = $_POST['username'];
    $password1 = md5($_POST['password']);
     
    $sql = "SELECT * FROM signup_php WHERE username = '$username1' AND password = '$password1'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if ($row['username'] == "$username1"){
            $_SESSION['log_in'] = $row['username'];
            header("location: http://localhost/hau/HAU/santos-p-RGW2(Responsive%20Gaming%20Website)/");
        }
    }




}




?>



<!DOCTYPEhtml>
<html lang ="en">
<head>
     <meta charset="UTF-8">
     <meta http-quiv="X-UA-Compatible "content="IE=edge >
     <meta name="viewport" content= "width=device-width, initial-scale=1.0">
     <title>Login Page</title>
     <!-- fav icon -->
     <link rel="shortcut icon" href ="images/fav.png" type ="image/x-icon">
     <!-- link to css -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/login.css">
     <!-- box icons -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
    <!-- scroll bar -->
    <div class="progress">
        <div class="progress-bar" id="scroll-bar"></div>
    </div>
    <!-- header -->
    <header>
        
        <!-- LOGO -->
        <div class="nav container">
            
            <a href="index.php" class="logo">Game<span>Store</span></a>
        </div>
    
    </header>
    <section>
        <!-- login bg -->
        <div class="imgBx">
            <img src="./images/loginbg.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <form action="" method="POST" >
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username">
                    </div>
                    <div class="inputBx">
                        <span>password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign in" name="login">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account? <a href="./SignUp.php">Sign Up Here</a></p>
                    </div>
                </form>
                <h3>Login with social media </h3>
                <div class="sci">
                    <li><img src="./images/fb.png"></li>
                    <li><img src="./images/twitter.png"></li>
                    <li><img src="./images/insta.png"></li>
                </div>
            </div>
        </div>
    </section>
</section>
</body>
</html>