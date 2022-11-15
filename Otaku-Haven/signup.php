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

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
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
        
    <link rel="stylesheet" href="css/signup.css">
    <title>Otaku Haven - Signup</title>
    <link rel="icon" href="img/icons/icon.png">
</head>
<body>
    <!-- Navigation Bar Start Here -->
        <div class="loginform">
         <h1>Register Here</h1>
         <form method="POST">
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
           
           <input type="submit" value="Signup">
           <div class="signup_link">
             Already a Member? <a href="login.php">Login Now</a>
           </div>
         </form>
       </div>  

</body>
 <!--script-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>