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
        <script src="js/pop_up.js"></script>
        <style>
            /* UTILITIES */
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Raleway", sans-serif
            }
            body, html {
                height: 100%;
                line-height: 1.8;
            }
            .bgimg-1{
                position:relative;
                background-position: center;
                background-size: cover;
                background-image: url("assets/bg.jpg");
                min-height: 88%;
            }
            #logo{
                height: 65px;
                width: 80px;
                margin-left: 30px;
            }
            .topnav{
                margin-top: -1px;
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
                height: 175vh;
                opacity: 0.9;
                text-align: left;
            }
            /*Container*/
            .date1 input[type=submit], .date2 input[type=submit], .date3 input[type=submit], .date4 input[type=submit], .date5 input[type=submit], .date6 input[type=submit]{
                margin-left:60px;
            }
            label{
                font-weight: bolder;
            }
            .left-data1 img{
                width: 180px;
                height: 150px;
                position: absolute;
                margin:80px 0 0 122px;
            }
            .right-data1{
                width: 40%;
                position: absolute;
                margin:80px 0 0 340px;
            }
            .date1{
                position: absolute;
                margin:80px 0 0 1020px;
            }
            .left-data2 img{
                width: 180px;
                height: 150px;
                position: absolute;
                margin:300px 0 0 -147px;
            }
            .right-data2{
                width: 40%;
                position: absolute;
                margin:305px 0 0 73px;
            }
            .date2{
                position: absolute;
                margin:300px 0 0 750px;
            }
            .left-data3 img{
                width: 180px;
                height: 150px;
                position: absolute;
                margin:520px 0 0 -413px;
            }
            .right-data3{
                width: 40%;
                position: absolute;
                margin:525px 0 0 -197px;
            }
            .date3{
                position: absolute;
                margin:520px 0 0 486px;
            }
            .left-data4 img{
                width: 180px;
                height: 150px;
                position: absolute;
                margin:740px 0 0 -681px;
            }
            .right-data4{
                width: 40%;
                position: absolute;
                margin:745px 0 0 -463px;
            }
            .date4{
                position: absolute;
                margin:740px 0 0 222px;
            }
            .left-data5 img{
                width: 180px;
                height: 150px;
                position: absolute;
                margin:960px 0 0 -948px;
            }
            .right-data5{
                width: 40%;
                position: absolute;
                margin:965px 0 0 -728px;
            }
            .date5{
                position: absolute;
                margin:960px 0 0 -44px;
            }
            .left-data6 img{
                width: 180px;
                height: 150px;
                position: absolute;
                margin:1180px 0 0 -1215px;
            }
            .right-data6{
                width: 40%;
                position: absolute;
                margin:1185px 0 0 -990px;
            }
            .date6{
                position: absolute;
                margin:1180px 0 0 -311px;
            }
            /*footer*/
            #footer{
                margin-top: 10px;
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
                margin:50px 550px 0;
                font-size: 13px;
                padding-bottom:30px;
            }
        </style>
    </head>
    <body>
    <div class="topnav">
            <div class="w3-bar " id="myNavbar">
                <a href="book_reserve.php" class="w3-bar-item" style="padding:10px 0;" id="home">
                    <img src="assets/logobg.png" alt="Logo Hoteli" id="logo">
                </a>
                <!-- navbar links-->
                <div class="w3-right w3-hide-small" style="padding:20px 0;" id="popup"><!--padding top-->
                    <a href="user.php" class="w3-bar-item w3-button">Home</a>
                    <a href="book_reserve.php" class="w3-bar-item w3-button">Book Reservation</a>
                    <a href="feedback.php" class="w3-bar-item w3-button">Feedback</a>
                    <a href="user_account_settings.php" class="w3-bar-item w3-button">Account Setting</a>
                    <a href="logout.php?logout" class="w3-bar-item w3-button w3-text-blue" style="margin-left:450px">Log out</a><!--move the navbar links-->
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
                    <div class="container-9">
                        <div class="row">
                            <?php
                                $sql = "SELECT * FROM userdata WHERE email='{$_SESSION["email"]}'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col">
                                <form action="process.php" method="POST">
                                    <div class="left-data1">
                                        <img src="assets/standardRoom.jpg" alt="Standard Hoteli Room">
                                    </div>
                                    <div class="right-data1">
                                        <dl>
                                            <dt>Standard Hoteli Room</dt>
                                                <dd>
                                                    In comparison to most hotel rooms, Standard Hoteli Room tend to be larger than their more basic counterparts. Whereas standard hotel rooms are typically separated into two main areas (bedroom & bathroom), standard suites usually include a separate living space.
                                                </dd>
                                                <dd style="font-weight:bold;">
                                                    x2 person's (Best Offer)
                                                </dd>
                                        </dl>
                                    </div>
                                    <div class="date1">
                                        <label>Date and Time</label><br>
                                        <input type="datetime-local" name="dnt1"><br><br>
                                        <input type="submit" name="booknow1" class="btn btn-warning" onclick="return confirm('Are you sure, you want to Book this Offer?');" value="Book Now"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <form action="process.php" method="POST">
                                    <div class="left-data2">
                                        <img src="assets/juniorRoom.jfif" alt="Junior Hoteli Room">
                                    </div>
                                    <div class="right-data2">
                                        <dl>
                                            <dt>Junior Hoteli Room</dt>
                                                <dd>
                                                    These are typically smaller versions of Standard Hoteli Room. While the layout likely denotes a specific space intended for sleeping, as well as a designated living area, the two may not be physically separated by a barrier. In Junior Hoteli Room, the living space may be a smaller extension of the bedroom area that doesn't come with a separate dining space.
                                                </dd>
                                                <dd style="font-weight:bold;">
                                                    x4 person's (Best offer for family)
                                                </dd>
                                        </dl>
                                    </div>
                                    <div class="date2">
                                        <label>Date and Time</label><br>
                                        <input type="datetime-local" name="dnt2"><br><br>
                                        <input type="submit" name="booknow2" class="btn btn-warning" onclick="return confirm('Are you sure, you want to Book this Offer?');" value="Book Now"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <form action="process.php" method="POST">
                                    <div class="left-data3">
                                        <img src="assets/presidentialRoom.jpg" alt="Presidential Hoteli Room">
                                    </div>
                                    <div class="right-data3">
                                        <dl>
                                            <dt>Presidential Hoteli Room</dt>
                                                <dd>
                                                    Presidential Hoteli Room are known for being some of the most impressive. If a hotel offers this room type, there are usually only one or two available in the entire hotel — even with the largest brands. Presidential Hoteli Room are some of the most expensive hotel rooms available for travelers to book on the entire market.
                                                </dd>
                                                <dd style="font-weight:bold;">
                                                    x15 person's (Best offer for the meeting)
                                                </dd>
                                        </dl>
                                    </div>
                                    <div class="date3">
                                        <label>Date and Time</label><br>
                                        <input type="datetime-local" name="dnt3"><br><br>
                                        <input type="submit" name="booknow3" class="btn btn-warning" onclick="return confirm('Are you sure, you want to Book this Offer?');" value="Book Now"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <form action="process.php" method="POST">
                                    <div class="left-data4">
                                        <img src="assets/penthouseRoom.jpg" alt="Penthouse Hoteli Room">
                                    </div>
                                    <div class="right-data4">
                                        <dl>
                                            <dt>Penthouse Hoteli Room</dt>
                                                <dd>
                                                    Penthouse Hoteli Room are usually located on the top floor of a luxury building and can take up the entire floor. Hotels that offer these accommodations are often found in the heart of iconic cities.
                                                </dd>
                                                <dd style="font-weight:bold;">
                                                    x2 person's (Best offer for relaxation)
                                                </dd>
                                        </dl>
                                    </div>
                                    <div class="date4">
                                        <label>Date and Time</label><br>
                                        <input type="datetime-local" name="dnt4"><br><br>
                                        <input type="submit" name="booknow4" class="btn btn-warning" onclick="return confirm('Are you sure, you want to Book this Offer?');" value="Book Now"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <form action="process.php" method="POST">
                                    <div class="left-data5">
                                        <img src="assets/honeymoonRoom.jpg" alt="Honeymoon Hoteli Room">
                                    </div>
                                    <div class="right-data5">
                                        <dl>
                                            <dt>Honeymoon Hoteli Room</dt>
                                                <dd>
                                                    Designed with couples in mind, Honeymoon Hoteli Room are also known as romance room. Honeymoon Hoteli Room usually offer amenities, services, and special accommodations related to romance. Guests may arrive to find champagne, roses, chocolates, and fresh flowers in their room. 
                                                </dd>
                                                <dd style="font-weight:bold;">
                                                    x2 person's (Best offer for the couple)
                                                </dd>
                                        </dl>
                                    </div>
                                    <div class="date5">
                                        <label>Date and Time</label><br>
                                        <input type="datetime-local" name="dnt5"><br><br>
                                        <input type="submit" name="booknow5" class="btn btn-warning" onclick="return confirm('Are you sure, you want to Book this Offer?');" value="Book Now"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <form action="process.php" method="POST">
                                    <div class="left-data6">
                                        <img src="assets/bridalRoom.jpeg" alt="Bridal Hoteli Room">
                                    </div>
                                    <div class="right-data6">
                                        <dl>
                                            <dt>Bridal Hoteli Room</dt>
                                                <dd>
                                                    Hotels that specialize in wedding services and accommodation often offer bridal suites to help the bridal party prepare for the big day.
                                                </dd>
                                                <dd style="font-weight:bold;">
                                                    x12 person's (Best offer for the party)
                                                </dd>
                                        </dl>
                                    </div>
                                    <div class="date6">
                                        <label>Date and Time</label><br>
                                        <input type="datetime-local" name="dnt6"><br><br>
                                        <input type="submit" name="booknow6" class="btn btn-warning" onclick="return confirm('Are you sure, you want to Book this Offer?');" value="Book Now"/>
                                    </div>
                                </form>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="w3-center w3-padding-30" id="footer">
            <a href="#home" class="w3-bar-item">
                <img src="assets/logobg.png" alt="Logo Hoteli" id="logo1"></img>
            </a>
            <div class="info-left">
                <p><em>Hoteli - Hotel & Restaurant</em></p>
                <p>#1 Holy Angel Avenue, Sto. Rosario St.<br>, Angeles City 2009</p>
            </div>
            <div class="info-right">  
                <p><b>(+63) 99 999 9999</b></p>
                <p><b>lggarcia@student.hau.edu.ph</b></p>
                
            </div>
            <div class="copyright">
                <p><small>Copyright © 2022, Hoteli - Hotel & Restaurant. All Rights Reserved</small></p>
            </div>
        </div>
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