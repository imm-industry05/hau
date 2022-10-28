<?php
      include_once 'header.php'
?>

<section id="login-container" class="login-container">
  <div class="forms">
    <div class="login-form">
      <h2>Sign Up</h2>

        <form action="includes/signup.inc.php" method="post">

          <div class="">
            <input type="text" name="name" placeholder="Enter Your Full Name (Juan Dela Cruz)">
            <!-- <i class="fa-solid fa-user"></i> -->
          </div>

          <div class="">
            <input type="text" name="email" placeholder="Enter Your Email (juandelacruz@mail.com)">
            <!-- <i class="fa-regular fa-envelope"></i> -->
          </div>

          <div class="">
            <input type="text" name="address" placeholder="Enter Your Address (City, Barangay, Street)">
            <!-- <i class="fa-regular fa-envelope"></i> -->
          </div>

          <div class="">
            <input type="password" name="pwd" placeholder="Enter Your Password">
          </div>

          <div class="">
            <input type="password" name="pwdrepeat" placeholder="Enter Your Confirm Password">
          </div>

          <button type="submit" name="submit">Sign Up</button>

          <div class="login-text-container">
            <p>Already have account?
              <a href="login.php" class="caa">Sign Up</a>
            </p>
          </div>
          <!--testing login system-->
          <div>
          <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill all flieds</p>";
              }
              else if($_GET["error"] == "invalidEmail"){
                echo "<p>The email is already taken!</p>";
              }
              else if($_GET["error"] == "invalidpassword"){
                echo "<p>The password don't match</p>";
              }
              else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong</p>";
              }
              else if($_GET["error"] == "none"){
                echo "<p>You have signed up!</p>";
              }
            }
           ?>
         </div>

        </form>
    </div>
  </div>
</section>


<!-- footer -->

<?php
    include_once 'footer.php'
?>
