<?php
 
session_start();

include("connect.php");
include("function.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {

    //read from database
    $query = "select * from users where user_name = '$user_name' limit 1";
    $result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {

        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] === $password)
        {

          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
    }
    
    echo "wrong username or password!";
  }else
  {
    echo "wrong username or password!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <link rel="stylesheet" href="css/login.css">
    <title>Otaku Haven - Login</title>
    <link rel="icon" href="img/icons/icon.png">
</head>
<body>
    <!-- Navigation Bar Start Here -->    
        <div class="loginform">
         <h1>OtakuHaven</h1>
         <form method="post">
           <div class="txt_field">
             <input type="text" name ="user_name" required>
             <span></span>
             <label>Username</label>
           </div>
           <div class="txt_field">
             <input type="password"name ="password"  required>
             <span></span>
             <label>Password</label>
           </div>
           <input type="submit" value="Login">
           <div class="signup_link">
             Not a Member? <a href="signup.php">Signup</a>
           </div>
         </form>
       </div>  

</body>
 <!--script-->
 <script src="js/navbaranimation.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>