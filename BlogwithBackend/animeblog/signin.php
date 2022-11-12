<?php
require 'conf/constants.php';
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Blog</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">


</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?php echo ROOT_URL ?>" class="nav_logo">Anime Blog</a>
            <ul class="nav_items">
                <li><a href="<?php echo ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?php echo ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?php echo ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?php echo ROOT_URL ?>contact.php">Contact</a></li>
                <li><a href="<?php echo ROOT_URL ?>signin.php">Signin</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="./images/avatar1.png">
                    </div>
                    <ul>
                        <li><a href="<?php echo ROOT_URL ?>admin/dashboard.php">Dashboard</a></li>
                        <li><a href="<?php echo ROOT_URL ?>logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-times-circle"></i></button>
        </div>
    </nav>

    <!--=============END NAV========-->

<section class="form_section">
    <div class="container .form_section-container">
        <h2>Sign In</h2>
        <?php if(isset($_SESSION['signup-success'])) :  ?>
            <div class="alert_message success">
                <p>
                    <?=$_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>
        <?php elseif(isset($_SESSION['signin'])) : ?>
            <div class="alert_message error">
                <p>
                    <?=$_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Username or Email">
            <input type="password" name="password" value="<?= $password ?>" placeholder="Password">
            <button type="submit" name="submit" class="btn">Sign In</button>
            <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>
</body>
</html>