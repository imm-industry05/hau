<!DOCTYPE html>
<html>
  <title>Hoteli</title>
  <link rel="icon" type="image/x-icon" href="assets/logobg.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3css.css">
  <!--Icon Offline-->
  <link href='css/all.min.css' rel='stylesheet'>
  <link href='css/fontawesome.min.css' rel='stylesheet'>
  <!--Bootstrap Offline-->
  <link href='css/bootstrap.css' rel='stylesheet'>
  <script src="js/bootstrap.js"></script>
  <!--Shortcut Icon-->
  <link rel="shortcut icon" type="x-icon" href="assets/logo.png">

  <style>
    body,h1,h2,h3,h4,h5,h6 {
      font-family: "Raleway", sans-serif;
    }

    body, html {
      height: 100%;
      line-height: 1.8;
    }
    /* Full height image header */
    .bgimg-1 {
      position:relative;
      background-position: center;
      background-size: cover;
      background-image: url("assets/bg.jpg");
      margin-top:3px;
      min-height: 90%;
    }
    #logo{
      height: 45px;
      width: 60px;
      margin-left: 30px;
    }
    .top{
      box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    }
    #link{
      padding-top:90px;
    }
    /*transparent box in welcome*/
    #transparentbox {
      margin: 100px 0 0 350px;
      position: absolute;
      background-color: #ffffff;
      padding: 15px 30px 70px;
      width: 50%;
      opacity: 0.8;
      text-align: center;
    }
    #transparentbox a{
        font-weight: bolder;
    }
    #button {
      border-radius: 20px;
      border: 1px solid #000;
      background-color: lightblue ;
      color: black;
      font-size: 12px;
      font-weight: bolder;
      margin: 20px 0;
      padding: 12px 45px;
      letter-spacing: 1px;
      text-transform: uppercase;
      box-shadow: 0 8px 19px -11px #1E90FF;
      transition: transform 80ms ease-in;
      transition: transform .2s;
    }

    #button:active {
        transform: scale(0.95);
    }
    #button:hover {
        color: blue ;
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.1); 
    }
    #button1{
      border-radius: 20px;
      border: 1px solid #000;
      background-color: #ffff ;
      color: black;
      font-size: 12px;
      font-weight: bolder;
      margin: 20px 0;
      padding: 12px 45px;
      letter-spacing: 1px;
      text-transform: uppercase;
      box-shadow: 0 8px 19px -11px #1E90FF;
      transition: transform 80ms ease-in;
      transition: transform .2s;
    }
    #button1:active {
        transform: scale(0.95);
    }
    #button1:hover {
        color: #000 ;
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.1); 
    }
    .mySlides {
      display: none;
    }
    img {
      vertical-align: middle;
    }
    #service h3{
      margin: -60px 0 20px 60px;
    }
    #service p{
      font-size: 19px;
      margin: -60px 0 60px 65px;
    }
    #service a{
      color: black;
      margin: -30px 0 0 60px;
      transition: transform .2s;
    }
    #service a:hover{
      background-color: blue;
      color: blue;
      -ms-transform: scale(1.1); /* IE 9 */
      -webkit-transform: scale(1.1); /* Safari 3-8 */
      transform: scale(1.1);
    }
    /* Slideshow container */
    .slideshow-container {
      max-width: 2000px;
      position: relative;
      margin: -50px 20px -80px 0;
    }
    /*Transparent background*/
    .transbox {
      position: absolute;
      background-color: #000;
      margin: -48px 1px 0 1px;
      padding: 10px 12px 10px;
      width: 100%;
      opacity: .7;
      text-align: center;
    }
    /* text */
    .text {
      font-size: 16px;
      color: #fff;
    }
    /* The dots/bullets/indicators */
    .dot {
      height: 1px;
      width: 15px;
      margin: 20px 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    /*footer logo*/
    #logo1{
      height: 85px;
      width: 95px;
      margin: 30px 600px 0;
    }
    /*remove the text link view in Special offer*/
    #nodec{
      text-decoration: none;
      color: black;
    }
    /* zoom the special offer card/box together with the image*/
    #zoom {
      transition: transform .2s;
      width: 300px;
      height: 550px;
      margin: 0 auto;
      box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    }
    #zoom:hover {
      -ms-transform: scale(1.1); /* IE 9 */
      -webkit-transform: scale(1.1); /* Safari 3-8 */
      transform: scale(1.1); 
    }
    iframe{
      width: 100%;
      height: 600px;
      margin-top: 60px;
      box-shadow:0 2px 30px 0 rgba(0,0,0,0.20),0 2px 40px 0 rgba(0,0,0,0.16);
    }
    /*footer*/
    #contact{
          margin-top: 100px;
          box-shadow:0 2px 10px 0 rgba(0,0,0,0.10),0 2px 20px 0 rgba(0,0,0,0.5);
      }
      .info-left{
          color: #000;
          float: left;  
          font-size: 15px;
          margin: -80px 0 60px 100px;
          text-align: justify;
      }
      .info-right{
          color: #000;
          float: right;  
          font-size: 15px;
          margin: -80px 100px 60px 100px;
          text-align: justify;
      }
      .copyright{
          margin:50px 450px;
          font-size: 13px;
          padding-bottom:30px;
      }
      .text {font-size: 11px
      }
  </style>
  <body>
    <!-- Navbar (sit on top) -->
    <div class="top">
      <div class="w3-bar " id="myNavbar">
        <a href="index.php" class="w3-bar-item" style="padding:10px 0;" id="home">
          <img src="assets/logobg.png" alt="Logo Hoteli" id="logo">
        </a>
        <!-- navbar links-->
        <div class="w3-right w3-hide-small" style="padding:5px 0;"><!--padding top-->
          <a href="#about" class="w3-bar-item w3-button">About Us</a>
          <a href="#services" class="w3-bar-item w3-button">Services</a>
          <a href="#location" class="w3-bar-item w3-button">Location</a>
          <a href="#contact" class="w3-bar-item w3-button">Contact</a>
          <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
          <a href="termsandpolicy.php" class="w3-bar-item w3-button">Terms & policy</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
      <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About Us</a>
      <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button">Services</a>
      <a href="#Location" onclick="w3_close()" class="w3-bar-item w3-button">Location</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
      <a href="portfolio.php" onclick="w3_close()" class="w3-bar-item w3-button">Portfolio</a>
      <a href="termsandpolicy.php" onclick="w3_close()" class="w3-bar-item w3-button">Terms & policy</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min w3-center">
      <div class="sw3-display-left w3-text-black">
        <div id="transparentbox">
          <span class="w3-jumbo w3-hide-small"><b>Welcome to Hoteli</b></span><br>
          <span class="w3-xxlarge w3-hide-large w3-hide-medium"><b>Welcome to Hoteli</b></span>
          <span class="w3-large"><b>There's no time to be bored in a world as beautiful as this.</b></span><br><br>
          <a href="book_now.php" class="w3-bar-item w3-button"><button type="button" id="button">Book Now</button></a>
        </div>
      </div> 
    </header>

    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px; margin-bottom:50px;" id="about">
      <h3 class="w3-center">ABOUT THE COMPANY</h3>
      <p class="w3-center w3-large" style="margin-top:2%;">“Hoteli” Hotel and Restaurant is a website created by the students of the Holy Angel University.<br > This website was launched in 2022.Hoteli came from the word Hotelization the process of hotelizing.<br> Hoteli website can reach the client satisfaction thru online services. It is a way to get book in our <br>services and also to gain more information in our “Hoteli” Hotel and Restaurant. The website <br> supports the client comment according to their experiences in which will be featured on the <br>website for other customers to see when they try to book in.</p>
    </div>

    <!-- Promo Section - "We know design" -->
    <div class="w3-container w3-dark-grey w3-hover-shadow:hover" style="padding:100px 0px 100px 0;" id="services">
        <div class="w3-row-padding">
            <div class="w3-col m6" id="service">
                <h3>SERVICES</h3><br><br>
                <p>Hotel Service Tip:<br>Great service creates great guest advocates for your hotel. <br>Give guests great service and they'll have a great reason to<br> tell others how great your hotel is!<br>-The_Appraiser</p>
                <a href="book_now.php"><button type="button" id="button1">Book Now</button></a>
            </div>
            <div class="w3-col m6">
                <div class="slideshow-container">
                    <div class="mySlides">
                        <img src="assets/roomsv1.png" style="width:100%">
                        <div class="transbox">
                            <div class="text"><b>Room Booking</b></div>
                        </div>
                    </div>

                    <div class="mySlides">
                        <img src="assets/roomsv.png" style="width:100%">
                        <div class="transbox">
                            <div class="text"><b>Room Service</b></div>
                        </div>
                    </div>

                    <div class="mySlides">
                        <img src="assets/foodbev.png" style="width:100%">
                        <div class="transbox">
                            <div class="text"><b>Food & Beverages</b></div>
                        </div>
                    </div>

                    <div class="mySlides">
                      <img src="assets/event1bg.png" style="width:100%">
                      <div class="transbox">
                          <div class="text"><b>Events</b></div>
                      </div>
                    </div>

                    <div class="mySlides">
                      <img src="assets/minibarbg.png" style="width:100%">
                      <div class="transbox">
                          <div class="text"><b>Mini Bar</b></div>
                      </div>
                    </div>

                    <div class="mySlides">
                      <img src="assets/managefacilitybg.png" style="width:100%">
                      <div class="transbox">
                          <div class="text"><b>Management Facilities</b></div>
                      </div>
                    </div>
                    <div style="text-align:center">
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span>
                      <span class="dot"></span> 
                      <span class="dot"></span>
                      <span class="dot"></span>  
                    </div>
              </div>
          </div>
      </div>
    </div>

    <!-- Special Offer Sections -->
    <div class="w3-container" style="padding:199px 16px">
      <h3 class="w3-center">SPECIAL OFFER</h3>
      <p class="w3-center w3-large">Because you are special, we have special offer.</p>
      <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <a href="book_now.php" id="nodec">
            <div class="w3-card" id="zoom">
              <img src="assets/datenightbg.png" alt="datenight" style="width:100%; padding-bottom:10px;" >
              <div class="w3-container">
                <h3>Date Night</h3>
                <p>So you want a romantic night with your partner come here to Hoteli - Hotel and Restaurant to experience the date night with high standard service. The quality time is one of the important aspect in the relationship so make sure you have to take this offer and enjoy the great romantic night date.</p>
              </div>
            </div>
        </a>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <a href="book_now.php" id="nodec">
            <div class="w3-card" id="zoom">
              <img src="assets/fambg.png" alt="Family Bonding" style="width:100%; padding-bottom:10px;">
              <div class="w3-container">
                <h3>Family Bonding</h3>
                <p style="padding-bottom:56px;">Having a Family Bonding is a wonderful moment in every member of the family. The Hoteli - Hotel and Restaurant has a large picnic ground so the member of hoteli has a authority to pass in the picnic ground.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <a href="book_now.php" id="nodec">
            <div class="w3-card" id="zoom">
              <img src="assets/poolofferbg.png" alt="Pool" style="width:100%; padding-bottom:10px;">
              <div class="w3-container">
                <h3>Pool</h3>
                <p style="padding-bottom:57px;">The Hoteli - Hotel and Restaurant has a swimming pool for the children and adult so they can swim if they want. Swimming pools are a source of happiness and entertainment for the member of hoteli.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <a href="book_now.php" id="nodec">
            <div class="w3-card" id="zoom">
              <img src="assets/roomservicebg.png" alt="Room Service" style="width:100%; padding-bottom:10px;">
              <div class="w3-container">
                <h3>Room Service</h3>
                <p style="padding-bottom:84px;">We offer a higly standard in the room servicing. We enabling the guests to choice their items in foods and rooms. Every Room has a different quality service base on the price that indicated.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Location Image Section -->
    <div class="w3-container" style="padding:15px 16px" id="location">
      <h3 class="w3-center">OUR LOCATION</h3>
      <p class="w3-center w3-large">What we've done for people</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d348702.4716359632!2d120.54145195131296!3d15.067219429966402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f4848d776319%3A0x55a57880b7da26f8!2sPampanga!5e0!3m2!1sen!2sph!4v1663590626678!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Footer -->
    <div class="w3-center w3-padding-30" id="contact">
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
    
    <script>
      // Toggle between showing and hiding the sidebar when clicking the menu icon
      var mySidebar = document.getElementById("mySidebar");

      function w3_open() {
        if (mySidebar.style.display === 'block') {
          mySidebar.style.display = 'none';
        } else {
          mySidebar.style.display = 'block';
        }
      }

      // Close the sidebar with the close button
      function w3_close() {
        mySidebar.style.display = "none";
      }
    </script>

    <!--slide show automatic-->
    <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
      }
    </script>
  </body>
</html>