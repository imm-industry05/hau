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

        <h1>Contact Us</h1>
    </section>
<!-----------------contact us content------------------>

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.459608020209!2d120.58782767947102!3d15.13308316791338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f24ec2f5a1f9%3A0x5e0af8a6aaab2282!2sHoly%20Angel%20University!5e0!3m2!1sen!2sph!4v1663597411350!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>#1 Holy Angel Avenue, Sto. Rosario,</h5>
                    <p>Angeles City, Philippines 2009</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>(63) 045-625-5748<br>
                        (63) 045-625-9620<br>
                        (63) 045-625-9619</h5>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span>
                    <h5>admissions@hau.edu.ph</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="form-handler.php" method="post">
                <input type="text" name="firstname" placeholder="Firstname" required>
                <input type="text" name="lastname" placeholder="Lastname" required>
                <input type="number" name="number" placeholder="Contact Number" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Form</button>  
            </form>
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