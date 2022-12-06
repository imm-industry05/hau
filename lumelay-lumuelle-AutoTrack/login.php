<?php
      include_once 'header.php'
?>

<section id="login-container" class="login-container">
  <div class="forms">
    <div class="login-form">
      <h2>Log In</h2>

        <form action="includes/login.inc.php" method="post">

          <div class="">
            <input class="input-field" type="text" name="email" placeholder="Email">
            <!-- <i class="fa-solid fa-user"></i> -->
          </div>

          <div class="">
            <input class="input-field" type="password" name="pwd" placeholder="Password">
          </div>

          <button type="submit" name="submit">Sign In</button>

          <div class="login-text-container">
            <div class="">
              <a href="#">Forgot password?</a>
            </div>
            <p>Not a member yet?
              <a href="signup.php" class="caa">Create an account</a>
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
