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
<!-- header (navigation bar)-->
    <header class="header">
      <a href="main.php" class="logo">AutoTrack</a>

      <nav class="navbar">
        <a href="main.php">Home</a>
        <a href="parts.php">Car Parts</a>
        <a href="accessories.php">Accessories</a>
        <a href="performance.php">Performance</a>
        <a href="about.php">About</a>
        <a href="contacts.php">Contacts</a>
      </nav>

      <div class="icons">
          <div class="fas fa-bars" id="menu-btn"></div>
          <div class="fas fa-search" id="search-btn"></div>
          <a href="cart.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
          <a href="login.php"><div class="fas fa-user" id="login-btn"></div></a>
      </div>

      <form class="search-form" action="">
          <input type="search" id="search-box" placeholder="Search parts or brand">
          <label for="search-box" class="fas fa-search"></label>
      </form>
    </header>
