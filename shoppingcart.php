<?php
session_start();
include('autoloader.php');
// if user is not logged in, redirect to home page
if(!$_SESSION["account_id"]){
  header("location:index.php");
}
$page_title = "Shopping Cart";
?>

<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include('includes/navbar.php'); ?>
    
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>My Cart</h1>      
        <p>Make yourself at home & feed your memory 
        <br>with appetite for all things yummy as gluttonous
        <br> curiosity is to be explored at Kurtosh house.</p>
      </div>
    </div>
    
    <div class="container" id="shopping-list">
      
    </div>
  
    <?php include ('includes/footer.php'); ?>
    <script src="/js/shopping-cart-page.js"></script>
  </body>
</html>