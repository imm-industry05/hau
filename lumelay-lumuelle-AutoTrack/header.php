<?php
      session_start()
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
     <title>AutoTrack</title>

     <!-- assets extention-->
     <!--  css file -->
         <link rel="stylesheet" type="text/css" href="css/main.css">
     <!--  font style -->
       <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,800;0,900;1,800;1,900&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
     <!--  icons (jv) -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
     <!--    <script src="https://kit.fontawesome.com/b9069ba292.js" crossorigin="anonymous"></script> -->

   </head>

   <body>
 <!-- header (navigation bar edited)-->

   <section id="header">
     <a href="main.php" class="logo">AutoTrack</a>

     <div class="">
       <ul id="navbar">
         <li><a href="main.php">Home</a></li>
         <li><a href="parts.php">Parts</a></li>
         <li><a href="performance.php">Performance</a></li>
         <li><a href="contacts.php">Contacts</a></li>

         <!-- icons -->
         <li id="icons"><i class="fas fa-search" id="search-btn"></i></li>
         <li id="icons"><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          <?php
            if (isset($_SESSION["useremail"])) {
              echo "<li id='icons'><a href='profile.php'><i class='fas fa-user'></i></a></li>";
            }
            else {
              echo "<li id='icons'><a href='login.php'><i class='fas fa-user'></i></a></li>";
            }
          ?>
         <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
       </ul>
     </div>

     <div id="nav-mobile">
       <i class="fas fa-search" id="search-btn"></i>
       <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
       <a href="login.php"><i class="fas fa-user"></i></a>
       <i id="bar" class="fa-solid fa-bars"></i>
     </div>
   </section>
