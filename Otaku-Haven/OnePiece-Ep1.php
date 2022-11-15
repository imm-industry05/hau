<?php
session_start();
   include("connect.php");
   include("function.php");

   $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/preview.css">
    <title>Otaku Haven | One Piece Episode 1</title>
    <link rel="icon" href="img/icons/icon.png">
</head>

<body>
    <!-- Navigation Bar Start Here -->
    <header>
        <nav>
           <div class="menu-icon">
              <span class="fas fa-bars"></span>
           </div>
           <div class="logo">
              <a href="index.php">OtakuHaven</a>
           </div>
           <div class="nav-items">
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#recently">Recently</a></li>
              <li><a href="index.php#trending">Trending</a></li>
              <li> <a href="#"><?php echo $user_data['user_name'];?> - san</a></li>
              <li><a href="logout.php">Logout</a></li>
           </div>
           <div class="search-icon">
              <span class="fas fa-search"></span>
           </div>
           <div class="cancel-icon">
              <span class="fas fa-times"></span>
           </div>
           <form action="#">
              <input type="search" class="search-data" placeholder="Search" required>
              <button type="submit" class="fas fa-search"></button>
           </form>
        </nav>
        </header>

<main class="container">
         <section class="main-video">
            <!--Change video iframe here-->
            <iframe src="https://gogohd.net/streaming.php?id=MzUxOA==&amp;title=One+Piece+Episode+1&amp;typesub=SUB" frameborder="0"></iframe>
         </section>
         
         <section class="video-playlist">
            <h3 class="title">One Piece</h3>
            <h3 class="title"></h3>
            <p>Total 1 of 1034 Episodes</p>
            
            <div class="video">
               
               <div class="play-videoactive">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 1</a>
               </div>
               
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 2</a>
               </div>               
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 3</a>
               </div>
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 4</a>
               </div>
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 5</a>
               </div>
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 6</a>
               </div>
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 7</a>
               </div>
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 8</a>
               </div>               
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 9</a>
               </div>               
               <div class="play-video">
                  <img src="img/icons/play.svg" alt="">
                  <a href="#"> One Piece Episode 10</a>
               </div>               
            </div>
         </section>
   </main>
 </body>
  <!--script-->
 <script src="js/navbaranimation.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>