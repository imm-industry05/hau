<?php

$server = "database";
$user = "root";
$pass = "123";
$database = "inventory_db";

$conn = mysqli_connect($server, $user, $pass, $database);

session_start();

if(!isset($_SESSION['log_in'])){
    header("location: /Login.php");
}


?>



<!DOCTYPEhtml>
<html lang ="en">
<head>
     <meta charset="UTF-8">
     <meta http-quiv="X-UA-Compatible "content="IE=edge >
     <meta name="viewport" content= "width=device-width, initial-scale=1.0">
     <title>Responsive Game Store Website</title>
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
                    <li><a href="/Logout.php">Log out</a></li>
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

    <!-- home section start -->
    <section class="home container" id="home">
        <img src="images/home.png" alt="">
        <div class="home-text">
            <h1>CITY OF THE <br> FUTURE</h1>
            <a href="#" class="btn"> Available Now!</a>
        </div>
    </section>
    <!-- home section end -->

    <!-- trending section start -->
     <section class="trending container" id="trending">
        <div class="heading">
            <i class='bx bxs-flame'></i>
            <h2>Trending Games</h2>
        </div>
        <!-- content -->
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <!-- slide 1 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending1.webp" alt="">
                        <div class="box-text">
                            <h2>Cyberpunk 2077</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- slide 2 -->
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending2.jpg" alt="">
                        <div class="box-text">
                            <h2>Battlefield 2042</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- slide 3 -->
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending3.jpg" alt="">
                        <div class="box-text">
                            <h2>Assassin's Creed Valhalla</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="download1.php" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- slide 4 -->
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending4.jpg" alt="">
                        <div class="box-text">
                            <h2>Ghost of Tushima</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- slide 5 -->
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending5.png" alt="">
                        <div class="box-text">
                            <h2>GTA V</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 6 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending6.jpg" alt="">
                        <div class="box-text">
                            <h2>Dying Light 2</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 7 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending7.png" alt="">
                        <div class="box-text">
                            <h2>Halo Infinite</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 8 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/trending8.png" alt="">
                        <div class="box-text">
                            <h2>Resident Evil Village</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
              
              </div>

        </div>
     </section>
    <!-- trending section end -->
    <!-- new section starts -->
    <section class="new container" id="new">
        <div class="heading">
            <i class='bx bx-game'></i>
            <h2>New Games</h2>
        </div>
        <!-- content -->
        <div class="new-content">
            <!-- box 1-->
            <div class="box">
                <img src="images/new1.jpg" alt="">
                <div class="box-text">
                    <h2>Subway Surfers</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="download2.php" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>
             <!-- box 2-->
             <div class="box">
                <img src="images/new2.jpg" alt="">
                <div class="box-text">
                    <h2>Call of Duty: Mobile</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>
             <!-- box 3-->
             <div class="box">
                <img src="images/new3.jpg" alt="">
                <div class="box-text">
                    <h2>Free Guy</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>
             <!-- box 4-->
             <div class="box">
                <img src="images/new4.jpg" alt="">
                <div class="box-text">
                    <h2>Clash Royale</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>
             <!-- box 5-->
             <div class="box">
                <img src="images/new5.png" alt="">
                <div class="box-text">
                    <h2>Minecraft</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>
             <!-- box 6-->
             <div class="box">
                <img src="images/new6.png" alt="">
                <div class="box-text">
                    <h2>PUBG</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>
             <!-- box 7-->
             <div class="box">
                <img src="images/new7.png" alt="">
                <div class="box-text">
                    <h2>Fornite</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>
             <!-- box 8-->
             <div class="box">
                <img src="images/new8.jpg" alt="">
                <div class="box-text">
                    <h2>Marvel of Champions</h2>
                    <h3>Action</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <span>4.7</span>
                        </div>
                        <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="next-page">
            <a href="#">Next Page</a>
        </div>
    </section>
    <!-- new section end -->
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