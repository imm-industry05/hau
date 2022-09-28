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

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

        body, html {
            height: 100%;
            line-height: 1.8;
        }
        #logo{
            height: 65px;
            width: 80px;
            margin-left: 30px;
        }
        .topnav{
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
       .container{
          position: absolute;
          background: #000;
          width: 55%;
          opacity: .8;
          margin: -40% 0 0 -10%;
          font-size: 30px;
          font-family: 'Courier New', monospace;
          text-align: left;
          padding-bottom: 50px;
          border-left-style: solid;
       }   
       #capitalize{
          text-transform: capitalize;
       }
      .carousel-fade .carousel-inner .item {
        opacity: 0;
        transition-property: opacity;
      }

      .carousel-fade .carousel-inner .active {
        opacity: 1;
      }

      .carousel-fade .carousel-inner .active.left,
      .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
      }

      .carousel-fade .carousel-inner .next.left,
      .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
      }

      .carousel-fade .carousel-control {
        z-index: 2;
      } 
      @media all and (transform-3d), (-webkit-transform-3d) {
          .carousel-fade .carousel-inner > .item.next,
          .carousel-fade .carousel-inner > .item.active.right {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
          }
          .carousel-fade .carousel-inner > .item.prev,
          .carousel-fade .carousel-inner > .item.active.left {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
          }
          .carousel-fade .carousel-inner > .item.next.left,
          .carousel-fade .carousel-inner > .item.prev.right,
          .carousel-fade .carousel-inner > .item.active {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
          }
        } 
        .carousel-caption {
            text-shadow: 0 1px 4px rgba(0,0,0,.9);
            font-size:30px;
            
        }
        .carousel-caption h1 {
          margin: -70% 0 0 40%;
          font-size: 165px;
          font-weight: bolder;
          font-family: Tahoma, sans-serif;
        }

        .carousel-caption h2 {
          margin: -60% 0 0 -35%;
          font-size: 165px;
          font-weight: bolder;
          font-family: Tahoma, sans-serif;
        }

        .carousel-caption h3 {
          margin: -40% 0 0 40%;
          font-size: 165px;
          font-weight: bolder;
          font-family: Tahoma, sans-serif;
        }

          .carousel,
          .carousel-inner,
          .carousel-inner .item {
            height: 100%;
          } 

          .item:nth-child(1) {
              background: url('assets/bg.jpg');
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
              }

          .item:nth-child(2) {
              background: url('assets/minibarbg.png');
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
              }

          .item:nth-child(3) {
              background: url('assets/minimalbg.jpg');
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
              }
          #button{
              position: relative;
              border: 2px solid white;
              background: transparent;
              color: white;
              width: 160px;
              height: 40px;
              font-size: 20px;
              font-family: 'Roboto', sans-serif;
              font-weight: bold;
              text-decoration: none;
              text-decoration: none;
              text-align: center;
              border-radius: 5px;
              opacity: .5;
              top: 30px;
              bottom: 0px;
              left: 120px;
              right: 0px;
              margin: auto;
              transition: .3s;
              transition: transform .2s;
            }

          #button:hover{
              border: 2px solid #81d184;
              cursor: pointer;
              color: #81d184;
              opacity: 1;
              transition: .3s;
              box-shadow: 0 2px 40px 0 #ffff;
              -ms-transform: scale(1.1); /* IE 9 */
              -webkit-transform: scale(1.1); /* Safari 3-8 */
              transform: scale(1.1);
            }
            #starter, #maincourse{
                  padding: 5%;
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
        <!-- Navbar (sit on top) -->
        <div class="topnav">
            <div class="w3-bar " id="myNavbar">
                <a href="user.php" class="w3-bar-item" style="padding:10px 0;" id="home">
                    <img src="assets/logobg.png" alt="Logo Hoteli" id="logo">
                </a>
                <!-- navbar links-->
                <div class="w3-right w3-hide-small" style="padding:20px 0;" id="popup"><!--padding top-->
                    <a href="#home" class="w3-bar-item w3-button">Home</a>
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
        
        <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">  
                <div class="carousel-caption">
                  <div class="container">
                    <p>I need something truly beautiful to look at in hotel rooms.</p>
                    <div id="button">
                        <a href="book_reserve.php">Reservation</a>
                    </div>
                  </div>
                  <h1>HOTELI</h1>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h2>HOTELI</h2>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>HOTELI</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <p><button onclick="document.getElementById('menu').style.display='block'">
      <img src="assets/starter.jpg" style="width:100%;height:30vh;" id="starter"></img>
        <h3>Starter</h3>
          <p>A starter is a small quantity of food that is served as the first course of a meal.</p>
      </button></p> 
    </div>
    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <p><button onclick="document.getElementById('menu1').style.display='block'">
      <img src="assets/maincourse.jpg" style="width:100%;height:30vh;" id="maincourse"></img>
        <h3>Main Course</h3>
          <p>The main course is the primary dish of food served for lunch or dinner.</p>
      </button></p> 
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <p><button onclick="document.getElementById('menu2').style.display='block'">
      <img src="assets/dessert.jpg" style="width:100%; height:30vh;"/>
        <h3>Desserts</h3>
          <p>Dessert is a course that concludes a meal. The course consists of sweet foods, such as confection.</p>
      </button></p> 
    </div>
    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <p><button onclick="document.getElementById('menu3').style.display='block'">
      <img src="assets/roomsv1.png" style="width:100%;height:30vh;">
        <h3>Drinks</h3>
          <p>A drink or beverage is a liquid intended for human consumption.</p>
      </button></p> 
    </div>
    

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Starters</h1>
    </div>
    <div class="w3-container" id="capitalize">
        <h4><b>chicken livers (H1)</b></h4>
        <h5>chicken livers, creamy peri-peri sauce, peppadews, feta, toasted ciabatta</h5><br>
        <h4><b>crocodile (H2)</b></h4>
        <h5>cajun fried crocodile tail strips, smoked crocodile carpaccio, pickled celery, tamarind dressing</h5><br>
        <h4><b>chargrilled avocado (H3)</b></h4>
        <h5>char grilled avocado, marinated baby marrow, black pepper crumbled feta, red onion, mint and lemon salsa</h5><br>
        <h4><b>crocodile (H4)</b></h4>
        <h5>deeply friend in the high temperature marinade, marinated baby marrow, black pepper crumbled feta</h5><br>
        <h4><b>salmon ceviche (H5)</b></h4>
        <h5>raw salmon cubes mixed, red onions, coriander, garlic and lime juice, apple salsa, melba toas</h5><br>
        <h4><b>beef steak tartar (H6)</b></h4>
        <h5>chopped raw beef fillet mixed with capers, red onions, dill cucumber, raw egg yolk, dijon mustard, chillies, rocket parmesan salad, melba toast</h5><br>
        <h4><b>quail (H7)</b></h4>
        <h5>port poached pear, herb butter</h5><br>
        <h4><b>springbok carpaccio (H8)</b></h4>
        <h5>thinly sliced smoked springbok carpaccio, green masala aioli, toasted almonds, wild rocket, pickled onions and beetroot, melba toas</h5><br>
        <h4><b>smoked snoek parcel (H9)</b></h4>
        <h5>smoked snoek, mozzarella, cheddar and coriander in phyllo pastry, paprika cheddar sauce, apricot gel</h5><br>
        <h4><b>frog legs (H10)</b></h4>
        <h5>fried frog legs, roasted garlic purée, parsley sauce</h5><br>
        <h4><b>beef carpaccio (H11)</b></h4>
        <h5>thinly sliced raw beef, deep fried capers, spring onions, wild rocket, parmesan shavings, lemon and mustard dressing, melba toast</h5><br>
    </div>
    </div>
</div>
<div id="menu1" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu1').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Main Courses</h1>
    </div>
    <div class="w3-container" id="capitalize">
        <h4><b>pepper rump (HR1)</b></h4>
        <h5>pepper crusted, chive mash, beans and onions, pepper sauce 210</h5><br>
        <h4><b>sirloin biltong blue cheese (HR2)</b></h4>
        <h5>potato fondant, red onion marmalade, wilted spinach, blue cheese sauce, deep fried</h5><br>
        <h4><b>fillet bone marrow (HR3)</b></h4>
        <h5>roasted bone marrow, potato fondant, grilled onions, tomatoes and mushrooms, caramelised onions, confit garlic, bordelaise sauce</h5><br>
        <h4><b>fillet camembert (HR4)</b></h4>
        <h5>sesame-crusted camembert, roasted garlic mash, sautéed spinach and shiitake mushrooms, cranberry and green peppercorn sauce</h5><br>
        <h4><b>t-bone tartufata (HR5)</b></h4>
        <h5>on the bone, broccoli, thick cut chips, mushroom truffle sauce</h5><br>
        <h4><b>ribeye café de paris (HR6)</b></h4>
        <h5>on the bone, broccoli, fondant potato, café de paris butter</h5><br>
        <h4><b>pork loin ribs (HR7)</b></h4>
        <h5>bbq basted, onion rings, skinny fries</h5><br>
        <h4><b>lamb loin chops (HR8)</b></h4>
        <h5>rosemary basted, chive mash, roasted balsamic vine tomatoes, smoked tomato confit</h5><br>
        <h4><b>oxtail (HR9)</b></h4>
        <h5>mushroom risotto, broccoli, oxtail jus</h5><br>
        <h4><b>smoked pork belly (HR10)</b></h4>
        <h5>apple and sage mash, peanut butter-butternut purée, spring onions, honey mustard sauce</h5><br>
        <h4><b>springbok shank (HR11)</b></h4>
        <h5>springbok shank, onion rings, green bean mash, glazed butternut, clove jus</h5><br>
    </div>
    </div>
   

</div>
<div id="menu2" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu2').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Desserts</h1>
    </div>
    <div class="w3-container" id="capitalize"><br>
        <h4><b>blondies and brownies (HRS1)</b></h4>
        <h5>dark chocolate brownie, white chocolate blondie, pistachio ice cream</h5><br>
        <h4><b>crème brûlée (HRS2)</b></h4>
        <h5>vanilla bean crème brûlée, almond biscotti, fresh fruit</h5><br>
        <h4><b>candy crush (HRS3)</b></h4>
        <h5>rainbow cheesecake, crushed candy cane, tonic jelly, candy floss, candied popcorn, bubblegum ice cream</h5><br>
        <h4><b>coconut panna cotta (HRS4)</b></h4>
        <h5>lime gel, toasted coconut meringue, candied cashews, berry coulis</h5><br>
        <h4><b>malva pudding (HRS5)</b></h4>
        <h5>traditional malva pudding, vanilla custard, shortbread crumble, vanilla ice cream</h5><br>
        <h4><b>le chocolate (HRS6)</b></h4>
        <h5>white and dark chocolate ganache tart, chocolate crumble, cocoa nib tuille</h5>
    </div>
  </div>
</div>

<div id="menu3" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black w3-display-container">
          <span onclick="document.getElementById('menu3').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
          <h1>Drinks</h1>
        </div>
        <div class="w3-container" id="capitalize">  
          <h5>americano (D1)<h5><br>
          <h5>cappuccino (D2)</h5><br>
          <h5>café (D3)</h5><br>
          <h5>chai (D4)</h5><br>
          <h5>chai (D5)</h5><br>
          <h5>teas (D6)</h5><br>
          <h5>flavoured teas (D7)</h5><br>
          <h5>chamomile, mint, earl grey, green tea (D8)</h5><br>
          <h5>hot chocolate (D9)</h5><br>
          <h5>single espresso (D10)</h5><br>
          <h5>double espresso (D11)</h5><br>
          <h5>irish coffee (D12)</h5><br>
          <h5>192O brandy (D13)</h5><br>
          <h5>dom pedro (D14)</h5><br>
          <h5>amarula, kahlua or whiskey (D15)</h5><br>
          <h5>grappa (D16)</h5><br>

          <div class="w3-container w3-black">
              <h1>HOT</h1>
          </div>
          <div class="w3-container" id="capitalize">
              <h5>cappuccino (DH1)</h5><br>
              <h5>café latte (DH2)</h5><br>
              <h5>chai latte (DH3)</h5><br>
              <h5>teas (DH4)</h5><br>
              <h5>flavoured teas (DH5)</h5><br>
              <h5>chamomile, mint, earl grey, green tea (DH6)</h5><br>
              <h5>hot chocolate (DH7)</h5><br>
          </div>
          <div class="w3-container w3-black">
              <h1>AFTER DINNER</h1>
          </div>
          <div class="w3-container" id="capitalize">
              <h5>single espresso (A1)</h5><br>
              <h5>double espresso (A2)</h5><br>
              <h5>irish coffee (A3)</h5><br>
              <h5>192O brandy (A4)</h5><br>
              <h5>dom pedro (A5)</h5><br>
              <h5>amarula, kahlua or whiskey (A6)</h5><br>
              <h5>grappa (A7)</h5><br>
          </div>
        </div>
      </div>
  </div>
</div>
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
<script>
    $('#carouselFade').carousel();
</script>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Footer -->
</html>