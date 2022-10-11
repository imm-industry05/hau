<?php


$server = "database";
$user = "root";
$pass = "123";
$database = "inventory_db";

$conn = mysqli_connect($server, $user, $pass, $database);


if (isset($_POST['submit'])) {

    $username1 = $_POST['username'];
    $email1 = $_POST['email'];
    $password1 = md5($_POST['password']);
    $cpassword1 = md5($_POST['cpassword']);

    if($password1 == $cpassword1){
        $sql = "SELECT * FROM signup_php WHERE email = 'email'";
        $result = mysqli_query($conn, $sql);

        if(!$result -> num_rows > 0) {
            $sql = "INSERT INTO signup_php(username, email, password) VALUES('$username1', '$email1', '$password1')";
            $result = mysqli_query($conn, $sql);

            
            if($result){
                $username1 = "";
                $email1 = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("location: /Login.php");
            } else {
                echo"<script>alert('Try again')</script>";
            }
        }else {
            echo"<script>alert('Email already is already existing')</script>";
        }
    }else{
        echo"<script>alert('Password do not match')</script>";
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
     <link rel="stylesheet" href="css/signup.css">

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
    <!-- sign up bg -->
    <div class="containerbg">
        <span>Responsive BG</span>
    </div>
    <!-- signup form start -->
    <div class="form">
        <h1>SignUp Form</h1>
        <hr>
        <!-- start -->
        <form action="" method="POST" >
            <div class="row">
                <div class="col">
                    <input type="text" name="username" placeholder="Username" value="<?php echo $username1; ?>" required>
                </div>
            </div>
            <!-- email -->
            <div class="email">
                    <input type="Email" name="email" placeholder="Email" value="<?php echo $email1; ?>" required>
                </div>
                <!-- password -->
                <div class="row">
                <div class="col">
                    <input type="password" name="password" placeholder="Password" value="<?php echo $password1; ?>" required>
                </div>
                <div class="row">
                <div class="col">
                    <input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $cpassword1; ?>" required>
                </div>
            </div>

            <!-- sign up button -->
            <div class="signupform">
                <input type="submit" name="submit" class="signupbtn sign1" value="SignUp Now">
            </div>
        </form>
        <hr>
        <div class="already">
            Already have an account? <a href="/Login.php">Sign In</a>
        </div>

        
    </div>




        </div>
    </section>


        
</body>
</html>