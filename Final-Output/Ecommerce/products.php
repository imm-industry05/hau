<?php
echo '
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset = "UTF-8">
        <meta name ="viewport" content="width=device-width", initial-scale="1.0">
        <title> All Products - Red Store </title>
        <link rel = "stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    </head>
    <body>
        
        <div class ="container">
        <div class ="navbar">
            <div class="logo">
                <img src="images/logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login_form.php">Account</a></li> 
                </ul>
            </nav>
            <a href="cart.php"><img src="Images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <div class ="small-container">
       
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by Price</option>
                <option>Short by Popularity</option>
                <option>Short by Rating</option>
                <option>Short by Sale</option>
            </select>
        </div>

        <div class="row">
            <div class ="col-4">
               <img src="images/product-1.jpg">
               <h4>Red Puma T-shirt</h4>
               <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
               </div>
               <p>$20.00</p>
            </div>
            <div class ="col-4">
                <img src="images/product-2.jpg">
                <h4>Black PUMA Shoes</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-3.jpg">
                <h4>PUMA Jogger</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                </div>
                <p>$30.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-4.jpg">
                <h4>Blue PUMA Polo-shirt</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$25.00</p>
             </div>
        </div> 
        <div class="row">
            <div class="col-3">
                 <img src="images/category-1.jpg">
            </div>
            <div class="col-3">
                <img src="images/category-2.jpg">
            </div>
            <div class="col-3">
                <img src="images/category-3.jpg">
            </div>
        </div>
    </div>
</div>


<!--- Featured Products --->
    <div class ="small-container">
        <h2 class ="title">Featured Products</h2>
        <div class="row">
            <div class ="col-4">
               <img src="images/product-1.jpg">
               <h4>Red PUMA T-shirt</h4>
               <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
               </div>
               <p>$20.00</p>
            </div>
            <div class ="col-4">
                <img src="images/product-2.jpg">
                <h4>Black PUMA Shoes</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-3.jpg">
                <h4>PUMA Jogger</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                </div>
                <p>$30.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-4.jpg">
                <h4>Blue PUMA Polo-shirt</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$25.00</p>
             </div>
        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class ="col-4">
               <img src="images/product-5.jpg">
               <h4>PUMA High Cut Shoes</h4>
               <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
               </div>
               <p>$60.00</p>
            </div>
            <div class ="col-4">
                <img src="images/product-6.jpg">
                <h4>Black PUMA t-shirt</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$20.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-7.jpg">
                <h4>PUMA Socks</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                </div>
                <p>$20.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-8.jpg">
                <h4>Black PUMA Watch</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$55.00</p>
             </div>
        </div>

        <div class="row">
            <div class ="col-4">
               <img src="images/product-9.jpg">
               <h4>Black Classic PUMA Watch</h4>
               <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
               </div>
               <p>$60.00</p>
            </div>
            <div class ="col-4">
                <img src="images/product-10.jpg">
                <h4>Black & RED PUMA Shoes Colorway</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-11.jpg">
                <h4>PUMA Grey Running Shoes</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                </div>
                <p>$30.00</p>
             </div>
             <div class ="col-4">
                <img src="images/product-12.jpg">
                <h4>Blue PUMA Polo-shirt</h4>
                <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
                </div>
                <p>$25.00</p>
             </div>
        </div>

        <div class="pgn-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>

<!----Footer----->

    <div class ="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="Images/play-store.png">
                        <img src="Images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="Images/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class ="copyright">Copyright 2022 - Pasco Ian Jordan B.</p>
        </div>
    </div>

    <!------js for toggle menu------->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px"
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    
    </script>
</body>
</html>
';
?>