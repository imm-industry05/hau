<?php

$server = "db";
$user = "root";
$pass = "123";
$database = "user_db";

$conn = mysqli_connect($server, $user, $pass, $database);

session_start();

if(!isset($_SESSION['user_name'])){
  header('location:/forms/loginPage.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/userStatic.css" />
    <link rel="stylesheet" href="/css/copyright.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap" rel="stylesheet"/>
    <title>Welcome</title>
  </head>
  <body>
    <main>
      <section class="landing">
        <nav>
          <h1 id="logo">Real Time Product Supply</h1>
          <ul class="nav-links">
            <li><a href="/Contact.php">Contact</a></li>
            <li><a href="/forms/logout.php">Log out <i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </nav>
        <p class="big-text2"><a href="">Our Product Supply</a></p>
        <p class="big-text3"><a href="/userStaticPage.php">Here <i class="fa-solid fa-forward"></i></a></p> 
        <div class="footer">
          <p class="credits">Copyright 2022 by Jan Deniel Bondoc</p>
        </div>
      </section>
    </main>
    <div class="intro">
      <div class="intro-text">
        <h1 class="hide">
          <span class="text">Welcome,</span>
        </h1>
        <h1 class="hide">
          <span class="text">We keep you</span>
        </h1>
        <h1 class="hide">
          <span class="text">updated.</span>
        </h1>
      </div>
    </div>
    <div class="slider"></div>
    



    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"></script>
    <script src="/app.js"></script>
  </body>
</html>