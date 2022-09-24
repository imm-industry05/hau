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

        <h1>About Us</h1>
    </section>
<!-----------------about us content------------------>

<section class="about-us">
    <div class="column">
        <div class="about-col">
            <h1>History</h1>
        <div class="about-col">
            <div class="left">
                <img src="images/history1.jpg">
            </div> 
        </div>
    </div>
    <div class="about-col">
        <p>In June 1933, Holy Angel Academy (HAA) opened its doors to a modest group of 78 high school students in the Holy Rosary Parish Convent. It was initiated through the joint efforts of the late Don Juan D. Nepomuceno, a known philanthropist/prominent businessman and Fr. Pedro P. Santos, then parish priest of the town of Angeles and later Archbishop of Nueva Caceres. Its primary purpose was to offer Catholic education in the secondary level, which was the felt need of the community at that time. It was organized as a non-stock, non-profit corporation oriented towards service to the community.
        <a href="history.php" class="red-btn">Continue Reading</a></p>
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