<!-- <?php
//include('autoloader.php');



//$page_title = "Login";
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
</html>-->

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
        <div class="col-md-4 offset-md-4">
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
          <h4>Login to your account</h4>
          <form id="login-form" method="post" action="login.php" novalidate>
            <div class="form-group">
              <label for="credentials">Email address or User name</label>
              <input id="credentials" class="form-control" type="text" name="credentials" placeholder="jenny@example.com or jenny66" required>
              <div class="invalid-feedback">Please type a valid username or email</div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="password" placeholder="your password" required>
              <div class="invalid-feedback">Please type a valid password</div>
            </div>
            <div class="text-center">
              <button type="submit" name="login" class="btn btn-outline-primary btn-block">Log in</button>
            </div>
            <p class="my-4">Don't have an account? <a href="register.php">Register</a> for a free account</p>
          </form>
        </div>
      </div>
    </div>
    <script src="/js/login.js"></script>
  </body>
</html>

<template id="alert-template">
  <div class="alert alert-dismissible fade show" role="alert">
    <span class="alert-message"></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</template>