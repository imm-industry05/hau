<?php
session_start();
   include("connect.php");
   include("function.php");

   $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Otaku Haven - Watch Anime for Free</title>
      <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="icon" href="img/icons/icon.png">
      <!--Scirpt from net-->
     
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
            <li><a href="login.php">Logout</a></li>
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
   <!-- Navigation Bar End here -->
  
   <!-- Slideshow section start here-->
   <section class="slideshow">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/animes/slider/Onepiece-slide.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>One Piece</h5>
            <p>The series focuses on Monkey D. Luffy, a young man made of rubber, who, inspired by his childhood idol, the powerful pirate Red-Haired Shanks, sets off on a journey from the East Blue Sea to find the mythical treasure, the One Piece, and proclaim himself the King of the Pirates.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/animes/slider/eightysix-slide.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Eighty Six</h5>
            <p>The story follows Lena as she commands a squad of drones called the 86. The Republic of San Magnolia is at war with its neighboring country, the Empire of Giad. Both sides use unmanned drones to conduct a "war without casualties". The story follows Lena as she commands a squad of drones called the 86.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/animes/slider/Konosuba-slide.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>KonoSuba</h5>
            <p>The series follows Kazuma Satō, a boy who is sent to a fantasy world with MMORPG elements following his death, where he forms a dysfunctional adventuring party with a goddess, an archwizard, and a crusader.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/animes/slider/jsdfgate-slide.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Gate - Thus the JSDF Fought There!</h5>
            <p>The government sends a small group of soldiers from the Japanese Self-Defense Forces to the alternate world beyond the gate. Led by otaku soldier Yōji, they find that the villages in the world are being attacked by a dragon.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/animes/slider/Swordartonline-slide.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Sword Art Online</h5>
            <p>The story of a multiplayer virtual-reality game that takes a deadly turn when players discover they can't escape of their own will but must play to victory or to death.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Slideshow section end here-->
  <div class="breaker">
    <h1>Recenlty Added</h1>
  </div>
<!-- Recently Added start here here-->
<section id="recently">
  <div class="r-container">
    <div class="r-row">
     
      <div class="r-image"> 
        <img src="img/animes/preview/Onepiece-card.jpg" alt="">
        <div class="r-details">
          <a href="OnePiece-Ep1.php">One Piece:</a>
          <a href="#">Episode 10</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->

      <div class="r-image"> 
        <img src="img/animes/preview/Swordartonline-card.jpg" alt="">
        <div class="r-details">
          <a href="">Sword Art Online:</a>
          <a href="">Episode 10</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->
      <div class="r-image"> 
        <img src="img/animes/preview/EightySix-card.jpg" alt="">
        <div class="r-details">
          <a href="">Eighty Six:</a>
          <a href="">Episode 10</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->
      <div class="r-image"> 
        <img src="img/animes/preview/yourlieinapril-card.jpg" alt="">
        <div class="r-details">
          <a href="">Your Lie in April:</a>
          <a href="">Episode 10</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->
      <div class="r-image"> 
        <img src="img/animes/preview/KonoSuba-card.jpg" alt="">
        <div class="r-details">
          <a href="">Konosuba:</a>
          <a href="">Episode 10</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->
      <div class="r-image"> 
        <img src="img/animes/preview/jjk-card.jpg" alt="">
        <div class="r-details"> 
          <a href="">Jujutsu Kaisen:</a>
          <a href="">Episode 1</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->
      <div class="r-image"> 
        <img src="img/animes/preview/jsdf-card.jpg" alt="">
        <div class="r-details"> 
          <a href="">Gate - JSDF:</a>
          <a href="">Episode 1</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->
      <div class="r-image"> 
        <img src="img/animes/preview/cof-card.png" alt="">
        <div class="r-details"> 
          <a href="">Classroom of the Elites:</a>
          <a href="">Episode 1</a>
        </div>
        <!-- recently detials end here-->
      </div>
      <!-- recently image end here-->
    </div> 
    <!--end of row-->
  </div>
  <!--end of container-->
</section>
<!-- Recently Added end here here-->
<div class="breaker">
  <h1>Trending</h1>
</div>

<!-- Trending start here-->
<section id="trending">
  <div class="t-container">
    <div class="t-row">
      
      <div class="t-image">
        <img src="img/animes/preview/Onepiece-card.jpg" alt="">
        <div class="t-details">
          <a href="">One Piece:</a>
          <a href="">Episode 1</a>
        </div>
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
      
      <div class="t-image">
        <img src="img/animes/preview/jjk-card.jpg" alt="">
        <div class="t-details">
          <a href="">Jujutsu Kaisen:</a>
          <a href="">Episode 1</a>
        </div>
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
      <div class="t-image">
        <img src="img/animes/preview/bofuri-card.jpg" alt="">
        <div class="t-details">
          <a href="">Bofuri:</a>
          <a href="">Episode 1</a>
        </div>
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
      <div class="t-image">
        <img src="img/animes/preview/yahari-card.jpg" alt="">
        <div class="t-details">
          <a href="">Yahari Ore no Seishun Rabukome wa Machigatteiru:</a>
          <a href="">Episode 1</a>
        </div>
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
      <div class="t-image">
        <img src="img/animes/preview/EightySix-card.jpg" alt="">
        <div class="t-details">
          <a href="">Eighty Six:</a>
          <a href="">Episode 1</a>
        </div>
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
      <div class="t-image">
        <img src="img/animes/preview/kakkou-no-iinazuke-card.png" alt="">
        <div class="t-details">
          <a href="">Kakkou no Iinazuke:</a>
          <a href="">Episode 1</a>
        </div>
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
      <div class="t-image">
        <img src="img/animes/preview/RAG-card.webp" alt="">
        <div class="t-details">
          <a href="">Rent a Girlfriend:</a>
          <a href="">Episode 1</a>
        </div>
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
      <div class="t-image">
        <img src="img/animes/preview/KonoSuba-card.jpg" alt="">
        <div class="t-details">
          <a href="">Konosuba:</a>
          <a href="">Episode 1</a>
        </div>
        
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
        
        <!--Trending detials end here-->
      </div>
      <!-- Trending image end here-->
    </div>
    <!-- Trending row end here-->
  </div>
  <!-- Trending container end here-->
</section>
<!-- Trending end here-->
</body>
   <!-- Animations Scripts-->
   <script src="js/navbaranimation.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>