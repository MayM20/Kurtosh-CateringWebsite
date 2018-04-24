<?php

include('autoloader.php');


//create an instance of database class
<<<<<<< HEAD
//$database = new Database();
//$connection = $database -> connection;

$products_obj = new Products();
=======
$database = new Database();
$connection = $database -> connection;

$query = 'SELECT * FROM products';

//send the query to database
$statement = $connection -> prepare($query);

//execute query
$statement -> execute();

//get query results
$result = $statement -> get_result();

//check if there are results
>>>>>>> eea4777be5cc8ba1cddb6a3dc156eeeee691d77c
?>
<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include ('includes/navbar.php'); ?>
    <div class="container">
<<<<<<< HEAD
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
              
=======
      <?php 
      if( $result -> num_rows > 0){
          $col_counter = 0;
          while( $row = $result -> fetch_assoc() ){
              $col_counter++;
              if ($col_counter == 1){
                  echo "<div class=\"row\">";
              }
              $id = $row["id"];
              $name = $row["name"];
              $price = $row["price"];
              echo "<div class=\"col\">";
              echo "<h3>$name</h3>";
              echo "<p>$price</p>";
              echo "<p>product id: $id</p>";
              echo "</div>";
              if ($col_counter == 4){
                  echo "</div>";
                  $col_counter = 0;
              }
>>>>>>> eea4777be5cc8ba1cddb6a3dc156eeeee691d77c
          }
      }
      ?>
    </div>
  </body>
</html>