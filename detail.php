<?php
include("autoloader.php");

if (isset($_GET["product_id"]) ){
    
    $product_id = $_GET["product_id"];
    $product_detail = new ProductDetail( $product_id );
    
    $product = $product_detail -> getProduct($product_id);
    
    //$product_id = $product[0]["product_id"];
    $product_name = $product[0]["Name"];
    $product_price = $product[0]["Price"];
    $product_description = $product[0]["Description"];
}
$page_title = $product_name;
?>
<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include ('includes/navbar.php'); ?>
    <!--big main container-->
    <div class="container">
        <?php
          include('includes/breadcrumb.php');
          ?>
            <div class="row">
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
                <div class="col-sm-4">
                    <h1>
                        <?php echo $product_name; ?>
                    </h1>
                    <h2 class="price">
                        <?php echo $product_price; ?>
                    </h2>
                    <p class="description">
                        <?php echo $product_description; ?>
                    </p>
                    <!--FORM-->
                    <form class="cart-form" action="" id="shopping-form">
	    	            <h5 class="screen-reader-text">Quantity</h5>
	    	    	    <div class="quantity">
	    	    	        <input type="text" name="quantity" class="form-control border-primary text-center flex-fill" min="1" value="1">
	    	    	        <input name="product_id" type="hidden" value="<?php echo $product_id; ?>">
	    	    	        <div><?php echo $product_id . "test"; ?></div>
	    	    	        <button class="add-to-cart-btn single_add_to_cart_button button alt" type="submit" name="submit" value="shoppingcart" >ADD TO CART</button>
	    	    	        <button class="add-to-cart-btn single_add_to_cart_button button alt" type="sub2mit" name="sub232mit" value="199">ADD TO WISHLIST</button>
	    	    	     </div>
	    	    	</form>
	    	    </div>
            </div>
            
            <div class="row second-description">
                <div class="col-sm-10">
                    <h2>Description</h2>
                    <p class="description">
                        <?php echo $product_description; ?>
                    </p>
                </div>
            </div>
            
            <h2 styles="text-align:center">Related products</h2>
            <div class="row delicious-food-section">
	    					<div class="col-md-3 col-xs-6">
	    						<div class="single-item">
	    							<img src="images/graphics/crustyBread.jpg" alt="">
	    							<h5><a href="#">Simple Crusty Bread</a></h5>
	    							<p>Lorem ipsum dolor amet, consetec <br>adipiscing elit. magna</p>
	    						</div>
	    					</div> <!-- /.col- -->
	    					<div class="col-md-3 col-xs-6">
	    						<div class="single-item">
	    							<img src="images/graphics/croissant_2.jpg" alt="">
	    							<h5><a href="#">Big Size Cream Cake</a></h5>
	    							<p>Lorem ipsum dolor amet, consetec <br>adipiscing elit. magna</p>
	    						</div>
	    					</div> <!-- /.col- -->
	    					<div class="col-md-3 col-xs-6">
	    						<div class="single-item">
	    							<img src="images/graphics/minicupcake.jpg" alt="">
	    							<h5><a href="#">Delicious Cupcake</a></h5>
	    							<p>Lorem ipsum dolor amet, consetec <br>adipiscing elit. magna</p>
	    						</div>
	    					</div> <!-- /.col- -->
	    					<div>
	    				</div> <!-- /.row -->
            </div>
    </div>
    <script src = "js/product-detail.js"></script>
    <script src = "js/shopping-cart.js"></script>
  </body>
</html>
<?php include ('includes/footer.php'); ?>