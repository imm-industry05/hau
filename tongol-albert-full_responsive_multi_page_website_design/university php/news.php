<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="wit=device-width, initial-scale=1.0">

    <title>University Website Design</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="sub-header">

        <nav>
            <a href="index.php"><img src="images/logo.png"></a>

            <div class="nav-links" id="navLinks">

                <i class="fa fa-times" onclick="hideMenu()"></i>

                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSES</a></li>
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>

        <h1>News</h1>
    </section>
<!----------------news content------------------>

<section class="news-content">
    <div class="row">
        <div class="news-left">
            <img src="images/news.jpg">
            <h2>Team MARICHECK bags THIRD place in the first-ever DAP-sponsored START Hackathon 2022</h2>
            <h4>September 15, 2022</h4>
            <h6>School of Engineering and Architecture</h6>
            <p>The team MARICHECK of Holy Angel University’s School of Engineering and Architecture bagged 3rd place in the first-ever Development Academy of the Philippines (DAP) Center for  Strategic Futures (CSF) 48-hour START Hackathon through the Smart and Creative Communities (SSC) Program.</p>
            <br>
            <img src="images/news1.jpg">
            <br>
            <br>
            <p>Of the 58 entries from different industries, professional organizations, and HEIs nationwide, MARICHECK secured a spot in the Top 10 and competed in the 48-hour Hackathon. Team MARICHECK provides an innovative solution that encourages citizens’ participation in the planning and policymaking processes of Local Government Units through Digital Technology and Big Data.  A pitching competition was conducted as a culminating activity, with Team MARICHECK landing Third Place, with a cash prize of Php 25,000.00 and a network that will help develop and scale up their technology.</p>
            <br>
            <img src="images/news2.jpg">
            <br>
            <br>
            <p>MARICHECK founders are Engr. Mellow Rutherford Mendez, Engr. Francis Emmanuel Ignacio, Ms. Mary Jay Capulong, Ms. Nicole Mercado, and Mr. Angel Gregory Lansangan. With their winning, The team automatically qualifies for the Cohort 3 Co-Incubation Program of Encephalon TBI and BARAS TBI.</p>
            <br>    
                <div class="comment-box">
                    <h3>Leave a comment</h3>
                    <form class="comment-form">
                        <input type="text" placeholder="Enter Name">
                        <input type="email" placeholder="Enter Email">
                        <textarea rows="5" placeholder="Your comment"></textarea>
                        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                    </form>
                </div>
            </div>
        <div class="news-right">
            <h3>Recent Posts</h3>
            <div>
                <span>DAP-sponsored START Hackathon 2022</span>
                <span>25</span>
            </div>
            <div>
                <span>HCPI inks partnership with HAU</span>
                <span>18</span>
            </div>
            <div>
                <span>Reple Bags 3 Nat'l Press TILT Medals</span>
                <span>36</span>
            </div>
            <div>
                <span>SEd Hosts 5th Research Colloquium</span>
                <span>42</span>
            </div>                  
        </div>   
    </div>
</section>

<!--------------------Footer---------------------->

<section class="footer">
    <h4>About Holy Angel University</h4>
    <p>Holy Angel University has over 16,000 students, making it one of the biggest schools in Central Luzon. Established in 1933 by local philanthropist Juan D. Nepomuceno, it is considered the Philippines' first Catholic school founded by a layman instead of the usual diocese or religious congregation. It is also the first Catholic high school in the country that is co-educational, instead of the usual exclusively for boys or exclusively for girls.</p>
<div class="icons">
    <a href="https://www.facebook.com/holyangel1933/" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/holyangel1933" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.youtube.com/user/1HolyAngelUniversity" target="_blank"><i class="fa fa-youtube"></i></a>
    <a href="https://www.instagram.com/holyangel1933/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="https://www.linkedin.com/school/holyangel1933/" target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
<p>Made with <i class="fa fa-heart-o"></i> by <a href="https://www.youtube.com/channel/UCCt182VRsFF5bwdBi1Ktpqg" target="_blank" class="red-btn">Albert Tongol</a></p>
</section>

<!----------------Javascript for Toggle Menu--------------->

    <script>
        var navLinks=document.getElementById("navLinks");
        
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>