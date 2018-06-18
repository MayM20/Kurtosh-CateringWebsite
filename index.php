<?php

include('autoloader.php');
session_start();
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
    <div>
    	 <img class="home" src="images/graphics/banner-w-logo.jpg" alt="Logo">
    	 <h1 style="color: white;">SUPER DELICIOUS CRISPY CAKE</h1>
    </div>
    <div class="about-us-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-xs-12">
    				<img class="section2" src="images/graphics/cake_triangle.png"></img>
    			</div>
    			<div class="col-md-6 col-xs-12">
    				<div class="text">
    					
    				<h2>Kurtosh House</h2>
    				<p>Kurtosh house is the culmination of yearning to recreate what home feels like: comfortable, cozy, relaxing, flawed, unquestionably accepting, eclectic & sweet. 

            <br>The name Kurtosh comes from Kurtoskalacs, a traditional Hungarian pastry famously known as chimney cake. Boasting the perfect harmony of caramelised crispy flaky outer with soft inner walls, the cylindrical yeast pastry is often sold as street snacks from carts all over Hungary. 
            <br>Today, this sweet nosh forms one of many distinctive charms of Kurtosh house. Passersby often stop in their tracks to watch with their eyes widening with growing curiosity, the chef with a giant rolling pin & a thin ribbon of dough. From the chefs expert nudge of the hand, the dough effortlessly coils around the rolling pin ready to be baked to sweet golden goodness.   </p>
    			
    			</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="short-banner">
    	<div class="opacity">
    	 <h2>Making your Winter cake in June is perfect.</h2>
    	 </div>
    </div>
    <!--Start popular items-->
    	<div class="delicious-food-section fix-top-margin">
				<div class="container">
					<div class="theme-section-title text-center">
						<h2>Featured Products</h2>
						<p>Make yourself at home & feed your memory with appetite for all<br> things yummy as gluttonous curiosity is to be explored at Kurtosh house</p>
					</div> <!-- /.theme-section-title -->
					<div class="row">
						<div class="row delicious-food-section">
	    	    <div class="col col-xs-6">
	    	    	<div class="single-item">
	    	    		<img src="images/products/brownie_feature.png" alt="">
	    	    		<h5><a href="detail.php?product_id=67">Delicious Brownie</a></h5>
	    	    		<p>Big, Fudgy & decadent, studded with or without walnuts.<br>A customer favorite!</p>
	    	    	</div>
	    	    </div> <!-- /.col- -->
	    	    <div class="col col-xs-6">
	    	    	<div class="single-item">
	    	    		<img src="images/products/truffle_feature.png" alt="">
	    	    		<h5><a href="detail.php?product_id=71">Delicious Chocolate Truffle</a></h5>
	    	    		<p>Chocolate truffle is a type of chocolate confectionery, traditionally made with  <br>a chocolate ganache centre coated in chocolate, cocoa powder and chopped toasted nuts inside.</p>
	    	    	</div>
	    	    </div> <!-- /.col- -->
	    	    <div class="col col-xs-6">
	    	    	<div class="single-item">
	    	    		<img src="images/products/biscotti.png" alt="">
	    	    		<h5><a href="detail.php?product_id=72">Delicious Biscoti</a></h5>
	    	    		<p>Kurtosh's Toasted Almond Butter biscotti bite are the <br>same famous deluxe butter biscotti in bite-size form.</p>
	    	    	</div>
	    	    </div> <!-- /.col- -->
            </div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
				<div class="devider"></div>
			</div> <!-- /.delicious-food-section -->
			
  </body>
  <?php include ('includes/footer.php'); ?>
</html>