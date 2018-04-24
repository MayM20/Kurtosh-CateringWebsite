<?php

include('autoloader.php');


//create an instance of database class
//$database = new Database();
//$connection = $database -> connection;

$products_obj = new Products();
?>
<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include ('includes/navbar.php'); ?>
    <div class="container">
      <?php
      if( count($products_obj -> products) > 0 ){
          //output the products
          $col_counter = 0;
          foreach($products_obj -> products as $product){
            $product_id = $product["ID"];
            $product_name = $product["Name"];
            $product_price = $product["Price"];
            $product_description = $product["Description"];
            $product_image = $product["ImageFile"];
            
            $col_counter++;
            
            if ($col_counter == 1){
                  echo "<div class=\"row\">";
              }
              echo "<div class=\"col-sm-3 product-column\">";
              echo "<h3 class=\"product-name\">$product_name</h3>";
              echo "<img class=\"product-thumbnail img-fluid\" src=\"images/products/$product_image\">";
              echo "<p class=\"price\">$product_price</p>";
              // echo "<p>product id: $id</p>";
              echo "<a href=\"detail.php?product_id=$product_id\">View</a>";
              echo "</div>";
              
              if ($col_counter == 4){
                  echo "</div>";
                  echo "<hr>";
                  $col_counter = 0;
              }
              
          }
      }
      ?>
    </div>
  </body>
</html>