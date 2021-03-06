<?php
include('autoloader.php');

//handle POST request
if( $_SERVER["REQUEST_METHOD"] == "POST" ){
  $credentials = $_POST["credentials"];
  $password = $_POST["password"];
  //create instance of account class
  $account = new Account();
  $login = $account -> authenticate( $credentials, $password );
  if( $login == true ){
    //all good
    $destination = "index.php";
    header("location: $destination");
  }
  else{
    //get errors
    $errors = $account -> errors;
    echo count ( $account -> errors );
  }
}
?>
<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include('includes/navbar.php'); ?>
    <div class="container content">
      <div class="row">
        <div class="col-md-4 offset-md-4 login-box">
          <?php
          if( count($account -> errors) > 0 ){
            $error_string = implode(' ', $account -> errors );
             $alert = "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                      $error_string
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                      </button>
                    </div>";
            echo $alert;
          }
         
          ?>
          <h4 class="customer-title">LOGIN</h4>
          <form id="login-form" method="post" action="login.php" novalidate>
            <div class="form-group">
              <label for="credentials">Email or Username</label>
              <input id="credentials" class="form-control" type="text" name="credentials" placeholder="email or username" required>
              <div class="invalid-feedback">Please type a valid username or email</div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="password" placeholder="password" required>
              <div class="invalid-feedback">Please type a valid password</div>
            </div>
            <div class="text-center">
              <button type="submit" name="login" class="btn btn-outline-primary btn-block customer-btn">SIGN IN</button>
            </div>
            <p class="my-4">New customer? Click <a href="register.php">here</a> to register an account!</p>
          </form>
        </div>
      </div>
    </div>
    <!--<script src="/js/login.js"></script>-->
  </body>
  <?php include ('includes/footer.php'); ?>
</html>

<template id="alert-template">
  <div class="alert alert-dismissible fade show" role="alert">
    <span class="alert-message"></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</template>