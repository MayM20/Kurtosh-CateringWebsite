<?php
include('autoloader.php');



$page_title = "Login";
?>

<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include('includes/navbar.php'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-5">
          <h2>Login</h2>
          <form method="post" action="register.php">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input id="email" name="email" class="form-control" placeholder="you@domain.com" type="email">
            </div>
            <div class="form-group">
              <label for="username">Password</label>
              <input id="username" class="form-control" placeholder="password" type="password">
            </div>
            <div class="text-center">
              <button class="btn btn-primary">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>