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
            <input type="password" name="pwdrept" placeholder="Enter Your Confirm Password">
          </div>

          <button type="submit" name="submit">Sign Up</button>

          <div class="login-text-container">
            <p>Already have account?
              <a href="login.php" class="caa">Sign Up</a>
            </p>
          </div>

        </form>
    </div>
  </div>
</section>

<!-- footer -->

<?php
    include_once 'footer.php'
?>
