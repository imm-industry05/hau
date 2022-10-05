<?php
    session_start();
    require_once('config.php');
    if(isset($_SESSION['email']))
    {
       $sql = "SELECT * FROM userdata WHERE email='{$_SESSION["email"]}'";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_array($result);

       if($row["type"]=="User")
       {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <head>
        <title>Hoteli</title>
        <link rel="icon" type="image/x-icon" href="assets/logobg.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3css.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
        <!--Icon Offline-->
        <link href='css/all.min.css' rel='stylesheet'>
        <link href='css/fontawesome.min.css' rel='stylesheet'>
        <!--Bootstrap Offline-->
        <link href='css/bootstrap.css' rel='stylesheet'>
        <script src="js/bootstrap.js"></script>
        <!--Shortcut Icon-->
        <link rel="shortcut icon" type="x-icon" href="assets/logo.png">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

            body, html {
                position:relative;
                background-position: center;
                background-size: cover;
                background-image: url("assets/accountbg.jpg");
                min-height: 88%;
            }
            #logo{
                height: 45px;
                width: 60px;
                margin-left: 30px;
            }
            .topnav{
                background-color:white;
                text-decoration:none;
                box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
            }
            /*footer logo*/
            #logo1{
                height: 85px;
                width: 95px;
                margin: 30px 600px 0;
            }
            #popup a{
            transition: transform .2s;
            text-decoration: none;
            }
            #popup a:hover{
            color: rgb(2, 158, 28);
            -ms-transform: scale(1.1); /* IE 9 */
            -webkit-transform: scale(1.1); /* Safari 3-8 */
            transform: scale(1.1);
            }
            /*End of Navigation */
            .container{
                position: absolute;
            }
            .container .row{
                position: absolute;
                background: rgba('255,255,255, 0.1');
                padding: 50px 20% 0 20px;
            } 
            .container, .container a{
                color: #fff; 
                font-weight: bold;
                margin-right: 20px;  
            }
            .section{
                padding:25px 20px 0 0;
                font-size: 15px;
                float:right;
            }
            .container_info{
                font-size: 17px;
                color: black;
                font-weight: bold;
                margin: 2% 30% 0 80px;
                border-radius: 5px;
                padding: 20px 120px 60px 0;
            }
            .container_info legend{
                font-size: 30px;
            }
            input[type=text], select, input[type=password] {
                width: 210%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
            }
            input[type=submit] {
                font-size: 18px;
                margin: -30px 0 0 0;
                padding: 7px 20px;
                border-style: none;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
            #eye{
                position: absolute;
                margin: -50px 0 0 650px;
            }
            #eyes{
                position: absolute;
                margin: -50px 0 0 650px;
            }
        </style>
        </head>
        <body>
            <div class="topnav">
                <div class="w3-bar " id="myNavbar">
                    <a href="user.php" class="w3-bar-item" style="padding:10px 0;" id="home">
                        <img src="assets/logobg.png" alt="Logo Hoteli" id="logo">
                    </a>
                    <!-- navbar links-->
                    <div class="w3-right w3-hide-small" style="padding:10px 0;" id="popup"><!--padding top-->
                        <a href="user.php" class="w3-bar-item w3-button">Home</a>
                        <a href="book_reserve.php" class="w3-bar-item w3-button">Book Reservation</a>
                        <a href="feedback.php" class="w3-bar-item w3-button">Feedback</a>
                        <a href="user_account_settings.php" class="w3-bar-item w3-button">Account Setting</a>
                        <a href="logout.php?logout" class="w3-bar-item w3-button w3-text-blue" style="margin-left:350px">Log out</a><!--move the navbar links-->
                    </div>
                    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>    
                    <div class="container">
                        <div class="row">
                            <div class="container_info">
                                <legend>Account Settings:</legend>
                                <form action="process.php" method="post">
                                    <?php 
                                    $sql = "SELECT * FROM userdata WHERE email='{$_SESSION["email"]}'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <label>Name:</label><br>
                                        <input type="text" name="name"  value="<?php echo $row['name']; ?>" required><br>
                                        <label>Username:</label><br>
                                        <input type="text" name="email"  value="<?php echo $row['email']; ?>" required><br>
                                        <label>Password:</label><br>
                                        <input type="password" id="password" name="password"  value="<?php echo $row['password']; ?>" pattern=".{8,}"  required title="8 characters minimum" required/><br>
                                        <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toogle()"></i>
                                        <label>Confirm Password:</label><br>
                                        <input type="password" id="cpassword" name="cpassword" value="<?php echo $row['password']; ?>" pattern=".{8,}"  required title="8 characters minimum" required/><br>
                                        <i class="fa fa-eye" aria-hidden="true" id="eyes" onclick="toogles()"></i><br>
                                        <input type="submit" class="btn btn-success" name="updateuserprofile" value="Update" onclick="return confirm('Do you want to update your account?');"></input>
                                </form>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                //Password Show/Hide Icon
                var state=false;
                function toogle(){
                    if(state){
                        document.getElementById("password").setAttribute("type","password");
                        document.getElementById("eye").style.color='#7a797e';
                        state = false;
                    }
                    else{
                        document.getElementById("password").setAttribute("type","text");
                        document.getElementById("eye").style.color='#5887ef';
                        state = true;
                    }
                }

                var state=false;
                function toogles(){
                    if(state){
                        document.getElementById("cpassword").setAttribute("type","password");
                        document.getElementById("eyes").style.color='#7a797e';
                        state = false;
                    }
                    else{
                        document.getElementById("cpassword").setAttribute("type","text");
                        document.getElementById("eyes").style.color='#5887ef';
                        state = true;
                    }
                }
            </script>
        </body>
<?php
    }else{
        header("location:admin.php");
    }
        }
        else
        {
         header("location:index.php");
    }
?>
</html>