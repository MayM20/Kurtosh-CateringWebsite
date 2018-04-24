<?php
include('autoloader.php');


//check for post request
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //receive varialbes from form
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  $account = new Account();
  $registration = $account -> register($username,$email,$password);
  
  $success = array();
  $errors = array();
  
  if($registration == true) {
    
    $success["registration"] = "Account succesfully created!";
  }
  else {
    $errors["registration"] = "There has been an error!";
  }
}

$page_title = "Register for an account";
?>

<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include('includes/navbar.php'); ?>
    <div class="container">
      <?php
      if(count($success) > 0){
        $msg = implode(" ", $success);
      
      echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
        <strong>Success</strong> $msg
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
      
      }
      
      if (count($errors) > 0) {
        $msg = implode ( " ", $errors );
      
      echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <strong>Error</strong> $msg
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
      }
      
      ?>
 
      <div class="row justify-content-center">
        <div class="col-5">
          <h2>Register for an account</h2>
          <form method="post" action="register.php">
            <div class="form-group">
              <label for="username">User Name</label>
              <input id="username" name="username" class="form-control" placeholder="username" type="text">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input id="email" name="email" class="form-control" placeholder="you@domain.com" type="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" name="password" class="form-control" placeholder="password" type="password">
            </div>
            <div class="text-center">
              <button class="btn btn-primary">
                Sign up
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>