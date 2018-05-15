<?php
include("autoloader.php");

if (isset($_GET["product_id"]) ){
    $product_id = $_GET["product_id"];
    $product_detail = new ProductDetail( $product_id );
    $product = $product_detail -> product;
    
    $product_name = $product[0]["Name"];
    $product_price = $product[0]["Price"];
    $product_description = $product[0]["Description"];
}
?>
<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include ('includes/navbar.php'); ?>
    <div class="container">
        <div class="col-sm-6">
        <?php
            if( count($product) > 0 ){
                foreach($product as $product_image){
                    $image = $product_image["ImageFile"];
                    echo "<img class=\"img-fluid\" src=\"/images/products/$image\">";
                }
            }
            ?>
        </div>
        <div class="col-sm-6">
            <h2>
                <?php echo $product_name; ?>
            </h2>
            <p class="price">
                <?php echo $product_price; ?>
            </p>
            <p class="description">
                <?php echo $product_description; ?>
            </p>
        </div>
    </div>
  </body>
</html>