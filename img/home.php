<?php

@include 'config.php';

session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <header>
   <div class="logo">
       <a href="#"><img src="img/logo1.png" alt="logo"></a>

   </div>

   <nav>
    <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#sec">Adopt</a></li>
        <li><a href="#">Donate</a></li>
        <li><a href="#">Contact</a></li>
        <li><a class="logout" href="logout.php" >Logout</a></li>
    </ul>
   </nav>
</header>
<section>
<img src="img/background.gif" id="background">
   <img src="img/moon.png" id="moon">
   <img src="img/house4.png" id="house4">
   <img src="img/tree5.png" id="tree5">
   <img src="img/house6.png" id="house6">
   <img src="img/house7.png" id="house7">
   <img src="img/light8.png" id="light8">
   <img src="img/road9.png" id="road9">
   <img src="img/car10.png" id="car10">
</section>


<!---------------------section2--------------------->
<section>
<div class="sec" id="sec">
<img src="img/toy11.png" id="toy11">
<img src="img/books12.png" id="books12">
<img src="img/bed13.png" id="bed13">
<img src="img/carpet14.png" id="carpet14">
</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script>
   gsap.from("#moon", {
      scrollTrigger : {
         scrub: true
      },
      duration: 5,
      y: -20,
   })

   gsap.from("#car10", {
      scrollTrigger : {
         scrub: true
      },
      duration: 5,
      x: 100,
   })
</script>



</body>
</html>