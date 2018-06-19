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
                        <h1 class="nowrap">
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
	    	        	        <input type="text" name="quantity" class="border-primary text-center flex-fill" min="1" value="1">
	    	        	        <input name="product_id" type="hidden" value="<?php echo $product_id; ?>">
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
            
            <h2 styles="text-align:center">Featured Products</h2>
            <div class="row delicious-food-section">
	    	    <div class="col-md-3 col-xs-6">
	    	    	<div class="single-item">
	    	    		<img src="images/products/brownie_feature.png" alt="">
	    	    		<h5><a href="detail.php?product_id=67">Delicious Brownie</a></h5>
	    	    		<p>Big, Fudgy & decadent, studded with or without walnuts.<br>A customer favorite!</p>
	    	    	</div>
	    	    </div> <!-- /.col- -->
	    	    <div class="col-md-3 col-xs-6">
	    	    	<div class="single-item">
	    	    		<img src="images/products/truffle_feature.png" alt="">
	    	    		<h5><a href="detail.php?product_id=71">Delicious Chocolate Truffle</a></h5>
	    	    		<p>Chocolate truffle is a type of chocolate confectionery, traditionally made with  <br>a chocolate ganache centre coated in chocolate, cocoa powder and chopped toasted nuts inside.</p>
	    	    	</div>
	    	    </div> <!-- /.col- -->
	    	    <div class="col-md-3 col-xs-6">
	    	    	<div class="single-item">
	    	    		<img src="images/products/biscotti.png" alt="">
	    	    		<h5><a href="detail.php?product_id=72">Delicious Biscoti</a></h5>
	    	    		<p>Kurtosh's Toasted Almond Butter biscotti bite are the <br>same famous deluxe butter biscotti in bite-size form.</p>
	    	    	</div>
	    	    </div> <!-- /.col- -->
            </div>
    </div>
    <script src = "js/product-detail.js"></script>
    <script src = "js/shopping-cart.js"></script>
  </body>
</html>
<?php include ('includes/footer.php'); ?>