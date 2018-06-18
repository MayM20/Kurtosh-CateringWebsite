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
    	 <img class="home" src="images/graphics/banner.jpg" alt="Logo">
    </div>
    <div class="about-us-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-xs-12">
    				<img class="section2" src="images/graphics/cake_triangle.png"></img>
    			</div>
    			<div class="col-md-6 col-xs-12">
    				<div class="text">
    				<h2>Lorem ipsum</h2>
    				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
    			</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="short-banner">
    	<div class="opacity">
    	 <h2>Making your Winter cake in May is perfect.</h2>
    	 </div>
    </div>
    <!--Start popular items-->
    	<div class="delicious-food-section fix-top-margin">
				<div class="container">
					<div class="theme-section-title text-center">
						<h2>Delicious Means Cukape</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut laoreet <br> dolore magna aliquam erat volutpat lorem</p>
					</div> <!-- /.theme-section-title -->
					<div class="row">
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
						<div class="col-md-3 col-xs-6">
							<div class="single-item">
								<img src="images/graphics/bothDonuts.jpg" alt="">
								<h5><a href="#">Simple Crusty Bread</a></h5>
								<p>Lorem ipsum dolor amet, consetec <br>adipiscing elit. magna</p>
							</div>
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
				<div class="devider"></div>
			</div> <!-- /.delicious-food-section -->
			
  </body>
  <?php include ('includes/footer.php'); ?>
</html>