<!DOCTYPEhtml>
<html lang ="en">
<head>
     <meta charset="UTF-8">
     <meta http-quiv="X-UA-Compatible "content="IE=edge >
     <meta name="viewport" content= "width=device-width, initial-scale=1.0">
     <title>Download Page</title>
     <!-- fav icon -->
     <link rel="shortcut icon" href ="images/fav.png" type ="image/x-icon">
     <!-- link to css -->
     <link rel="stylesheet" href="css/style.css">
     <!-- box icons -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <!-- Swiper CSS file link -->
     <link rel="stylesheet" href="css/swiper-bundle.min.css">

</head>
<body>
     <!-- scroll bar -->
     <div class="progress">
        <div class="progress-bar" id="scroll-bar"></div>
    </div>
    <!-- header -->
    <header>
        <!-- nav -->
        <div class="nav container">
            <!-- logo -->
            <a href="index.php" class="logo">Game<span>Store</span></a>
            <!-- Nav Icons-->
            <div class="nav-icons">
                <i class='bx bx-bell bx-tada' id="bell-icon"><span></span></i>

                <!-- signup button :) -->
                <div class="signup">
                    <a href="./Login.php"><i class='bx bxs-user'></i></a>
                </div>

                <div class="menu-icon">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
            <!-- menu -->
            <div class="menu">
                <img src="images/menu.png" alt="">
                 <div class="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#trending">Trending</a></li>
                    <li><a href="#new">New Games</a></li>
                    <li><a href="#action">Action Games</a></li>
                    <li><a href="#About Us">About Us</a></li>
            </div>
        </div>
        <div class="notification">
            <div class="notification-box">
                <i class='bx bxs-check-circle' ></i>
                <p>Congratulations, Your game was downloaded successfully</p>
            </div>
            <div class="notification-box box-color">
                <i class='bx bxs-x-circle'></i>
                <p>Sorry, could not apply changes</p>
            </div>
        </div>
    </div>
    </header>
    <!-- Videos -->
    <div class="video-container container">
        <video src="./download-files/Subway Surfers Official.mp4" muted autoplay></video>
    </div>
    <!-- about -->
    <div class="about container">
        <h2>About Game</h2>
        <p>Subway Surfers is an endless runner video game. The game starts by tapping the touchscreen, while Jake (the game's starter character) or any other character sprays graffiti on a subway, and then gets caught in the act by the inspector and his dog, who starts chasing the character.
        </p>
    </div>
    <!-- screen shots-->
    <div class="screenshots container">
        <h2>ScreenShots</h2>
        <div class="screenshots-content">
            <img src="./images/screenshots1.jpg" alt="">
            <img src="./images/screenshots2.jpg" alt="">
            <img src="./images/screenshots3.jpg" alt="">
        </div>


    </div>
    <!-- download -->
    <div class="download">
        <h2>Download Links</h2>
        <div class="download-links">
            <a href="./download-files/Subway Surface.apk" download="">For Android</a>
            <a href="#">For Ios</a>
            <a href="#">For Windows</a>
        </div>
    </div>




    
    <!-- copyright -->
    <div class="copyright container">
        <a href="#" class="logo">Game <span>Store</span></a>
        <p>&#169; D-13th All right Reserved</p>
    </div>
















<!-- link swiper file -->
<script src="js/swiper-bundle.min.js"></script>

    <!-- link to js -->
    <script src="js/main.js"></script>
</body>
</html>