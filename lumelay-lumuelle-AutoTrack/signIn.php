<?php
      include_once 'header.php'
?>



<section id="login-container" class="login-container">
  <div class="forms">
    <div class="login-form">
      <h2>Sign Up</h2>

        <form action="signup.inc.php" method="post">

          <div class="">
            <input type="text" name="name" placeholder="Enter Your Full Name">
            <!-- <i class="fa-solid fa-user"></i> -->
          </div>

          <div class="">
            <input type="text" name="email" placeholder="Enter Your Email">
            <!-- <i class="fa-regular fa-envelope"></i> -->
          </div>

          <div class="">
            <input type="text" name="email" placeholder="Enter Your Address">
            <!-- <i class="fa-regular fa-envelope"></i> -->
          </div>

          <div class="">
            <input type="password" name="pwd" placeholder="Enter Your Password">
          </div>

          <div class="">
            <input type="password" name="pwdrept" placeholder="Enter Your Confirm Password">
          </div>

          <button class="normal" type="submit" name="submit">Sign Up</button>

          <div class="">
            <p>Already have account?
              <a href="login.php">Sign Up</a>
            </p>
          </div>

        </form>

    </div>
  </div>
</section>

<script type ="text/javascript" src="js/nav.js"></script>

<!-- footer -->

<?
    include_once 'footer.php',
?>
