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

        <h1>Academic Programs</h1>
    </section>
<!----------------AcadPrograms------------------>

<section class="course">
    <h1>Academic Programs</h1>
    <p>HAU offers various academic programs from basic education, undergraduate, to postgraduate levels. Regardless of the area of discipline you choose, HAU is committed to provide transformative education to make a difference, hone your values, and develop your capabilities. </p>
    <div class="row">
        <div class="course-col">
            <h3>Basic Education</h3>
            <p>The Laboratory Elementary School was established in 1960 primarily as a training ground for the students of the College of Education. A Grade One class was initially opened with the children of the workers of the founder, Don Juan D. Nepomuceno, as the pupils who all studied free of charge.</p>
        </div>
        <div class="course-col">
            <h3>College</h3>
            <p>HAU offers cutting-edge academic programs for the undergraduate level. Regardless of the area of discipline you choose, HAU is committed to provide transformative education to make a difference, hone your values, and develop your capabilities.</p>
        </div>
        <div class="course-col">
            <h3>Graduate School</h3>
            <p>The Graduate School envisions itself to be one of the centers of excellence in graduate education and research in the Asia Pacific Region that will produce graduates who are role model catalysts for countryside development in the fields of Arts and Sciences, Business, Education, Information Technology, Engineering and Nursing education.</p>
        </div>
    </div>
</section>

<!-------------facilities---------------->

<section class="facilities">
    <h1>Our Facilities</h1>
    
    <div class="row">
        <div class="facilities-col">
            <img src="images/library.png">
                <h3>Study Areas</h3>
                <p>The Library has open reading areas in the 2nd and 3rd floors of the library for reading and serious study. They are available on a first come-first serve basis.</p>
        </div>
        <div class="facilities-col">
            <img src="images/discussion.jpg">
                <h3>Discussion Rooms</h3>
                <p>Discussion rooms are available for currently enrolled students. Inquiries for the use of these rooms should be made at the Office of the Chief Librarian (2nd Floor).</p>
        </div>
        <div class="facilities-col">
            <img src="images/faculty.jpg">
                <h3>Faculty Room</h3>
                <p>Located at the 2nd floor of the library and is provided with two (2) computer units w/ internet connections. It can accommodate 12-15 faculty at one time.</p>
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