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

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <style>
            /* UTILITIES */
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
                background-image: url("assets/locatebg.png");
                margin-top:15px;
                min-height: 88%;
            }
            #logo{
                height: 45px;
                width: 60px;
                margin-left: 30px;
            }
            .topnav{
                margin-top: -30px;
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
            /*transparent box in welcome*/
            #transparentbox {
                background-color: #ffffff;
                position:relative;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 130vh;
                opacity: 0.9;
                text-align: center;
            }

            textarea{
                overflow: hidden;
                width: 80%;
                padding: 0.8em 1em;
                font-weight: normal;
                border-radius: 5px;
                outline: none;
                height: 7em;
                border: 1px solid #696867;
            }
            .container h1{
                font-family:"Raleway", sans-serif;
                font-weight: 900;
            }
            .container h3{
                font-weight: 600;
            }
            .container ul li{
                list-style-type:none;
                text-align: left;
                margin: 0 auto 10px;
                padding-left: 350px;
            }       
            .optional{
                margin: 10px;
                padding: 5px 2px;
                border-radius: 5px;
                font-weight: normal;
                width: 20%;
                border: 1px solid #696867;
            }
            .nameoptional{
                font-weight: 900;
            }
            .btn{   
                background-color:#0051d4;
                border: 1px solid #1E90FF;
                color: white;
                padding: 5px;
                font-size: 18px;
                cursor: pointer;
                width: 13%;
                display: flex;
                margin:0 auto;
                justify-content: center;
                align-items: center;
                overflow: auto;
            }    
            /*footer*/
          #contact{
              margin-top: 3px;
              box-shadow:0 2px 10px 0 rgba(0,0,0,0.10),0 2px 20px 0 rgba(0,0,0,0.5);
          }
          .info-left{
              color: #000;
              float: left;  
              font-size: 15px;
              margin: -80px 0 60px 200px;
              text-align: justify;
          }
          .info-right{
              color: #000;
              float: right;  
              font-size: 15px;
              margin: -80px 230px 60px 100px;
              text-align: justify;
          }
          .copyright{
              margin:50px 490px 0;
              font-size: 13px;
              padding-bottom:30px;
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
            <!-- Header with full-height image -->
            <header class="bgimg-1 w3-display-container w3-grayscale-min w3-center">
                <div class="sw3-display-left w3-text-black">
                    <div id="transparentbox">
                        <div class="container"><br>
                            <h1>Feedback Form</h1><br>
                            <form action="process.php" method="POST">
                                <h3>How satisfied were you with our Services?</h3>
                                <ul>
                                    <li><input type="radio" name="fb" value="excellent" id="excellent"> 
                                        <label for="excellent">excellent</label>
                                    </li>
                                    <li><input type="radio" name="fb" value="good" id="good"> 
                                        <label for="good"> good</label>
                                    </li>
                                    <li><input type="radio" name="fb" value="neutral" id="neutral">
                                        <label for="neutral">neutral</label>
                                    </li>
                                    <li><input type="radio" name="fb" value="poor" id="poor"> 
                                        <label for="poor">poor</label>   
                                    </li>
                                </ul>
                                <h3>If you have specific suggestion, please write to us...</h3>
                                <textarea placeholder="Additional comments..."  name="suggestion" required=""></textarea><br>
                                <span class="nameoptional">Name:</span>
                                <input type="text" placeholder="Your Name (optional)" name="name" class="optional" /><br>
                                <span class="nameoptional">Email:</span>
                                <input type="email" placeholder="Your Email (optional)" name="email" class="optional"/><br>
                                <input type="submit" value="SUBMIT" name="feedback" class="btn btn-primary" />
                            </form>
                        </div>
                    </div>   
                </div> 
            </header>

        
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