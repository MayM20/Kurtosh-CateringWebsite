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
            <form class="cart-form" action="" method="post">
		        <h5 class="screen-reader-text">Quantity</h5>
			<div class="quantity">
			<input type="number" id="" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
			<button class="add-to-cart-btn" type="submit" name="add-to-cart" value="199" class="single_add_to_cart_button button alt">ADD TO CART</button>
			<button class="add-to-wish-btn" type="submit" name="add-to-wish" value="199" class="single_wish_button button alt">ADD TO WISHLIST</button>
			</div>
			</div>
			</form>
  
        
        <!--SIDE BAR RIGHT-->
        <div class="col-sm-2 sidebar">
            <div class="cart-container">
            <h2>Cart</h2>
            <p>No products in your cart.</p>
            </div>
            <div class="featured-products">
            <h2>Featured products</h2>
            <ul class="product_list_widget">
                </ul>
            </div>
        </div>
        </div>
        
        
        <div class="row second-description">
            <div class="col-sm-10">
            <h2>Description</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id est et diam ultricies consectetur vel et lacus. Curabitur pretium, libero id rhoncus aliquet, ante lacus lacinia ex, nec dapibus quam massa id lacus. Fusce aliquet lacus in facilisis gravida. Quisque et volutpat massa. Nulla facilisi. Mauris nec ex aliquet magna dignissim scelerisque eget sit amet libero. Donec porta velit eget nulla tincidunt rhoncus. Etiam ac purus ac massa pretium fermentum et imperdiet nibh.</p>
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
  </body>
</html>
<?php include ('includes/footer.php'); ?>