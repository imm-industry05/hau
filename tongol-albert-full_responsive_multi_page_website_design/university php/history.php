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

        <h1>History</h1>
    </section>
<!----------------history content------------------>

<section class="history-content">
    <div class="row">
        <div class="history-left">
            <h2>The Early Years</h2>
            <p>In June 1933, Holy Angel Academy (HAA) opened its doors to a modest group of 78 high school students in the Holy Rosary Parish Convent. It was initiated through the joint efforts of the late Don Juan D. Nepomuceno, a known philanthropist/prominent businessman and Fr. Pedro P. Santos, then parish priest of the town of Angeles and later Archbishop of Nueva Caceres. Its primary purpose was to offer Catholic education in the secondary level, which was the felt need of the community at that time. It was organized as a non-stock, non-profit corporation oriented towards service to the community.</p>
            <br>
            <img src="images/history1.jpg">
            <br><br>
            <p>The founders employed the able leadership of Ricardo V. Flores, an energetic educator from Pagsanjan, Laguna whose efforts, commitment and perseverance brought forth in two months the opening of a complete secondary school and the issuance of government recognition in February 1934. Consequently, the Holy Angel Academy (HAA) became the first Catholic co-educational high school run by laypersons with the First Friday devotion to the Sacred Heart of Jesus, as its initial signature landmark. By 1940, HAA moved from the Parish Convent to its first building (present Don Juan D. Nepomuceno Building or DJDN Building) to accommodate its expanding enrollment.</p>
            <br>
            <p>When World War II broke out, classes were suspended and resumed only in 1945. On May 8, 1947 the Academy was given new government recognition for its General Secondary Education Program. In school year 1947-48, the Evening High School Program started to provide educational opportunities for working students, particularly the employees in Clark Air Force Base. Likewise, the tertiary department was established with the 2-year Junior Normal College or Elementary Teacher's Certificate (ETC) as its initial program in response to the growing need for teachers in public schools. This program continued operating until 1963, when it was converted to a 4-year Normal College or the Bachelor of Science in Elementary Education (BEED) that was granted government recognition on February 11, 1955, this program continued operating until 1963, when it was converted to a 4-year Collegiate Normal Course of the Bachelor of Science in Elementary Education (BSEEd).</p>
            <br>
            <img src="images/history3.jpg">
            <br><br>
            <p>In 1948, the College of Commerce opened with a program, Bachelor of Science in Commerce whose government recognition was issued on December 3, 1951 or upon graduation of its first twenty three (23) students. In 1955, the Academy offered the 2-year Associate in Arts (also known as Preparatory Law Course) which was later converted into a 4-year Liberal Arts (or Bachelor of Arts) that was granted government recognition on May 18, 1960.</p>    
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