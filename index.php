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
    <div>
    	 <img class="home" src="images/graphics/banner.jpg" alt="Logo">
    </div>
    <div class="about-us-section">
    	<div class="container">
    		<div class="row">
    			<div class="col">
    				<img class="section2" src="images/graphics/cake_triangle.png"></img>
    			</div>
    			<div class="col">
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
    <!-- 
			=============================================
				Footer
			============================================== 
			-->
			<footer class="theme-main-footer">
				<div class="top-footer-widget">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-12 footer-logo">
								<a href="#" class="logo">
									<img src="images/graphics/logo_kurtosh.png" alt="">
								</a>
								<p>Azimpur, Uttara Sec 7, Dhaka <br>cukapeinc@gmil.com</p>
								<a href="tel:+880-1723-801-729" class="tran3s">+880 1723 801 729</a>
							</div> <!-- /.footer-logo -->
							<div class="col-md-2 col-sm-4 col-xs-12 footer-list-widget">
								<h5>Quick Links</h5>
								<ul>
									<li><a href="about-us.html" class="tran3s">About us</a></li>
									<li><a href="pricing-plan.html" class="tran3s">Membership</a></li>
									<li><a href="#" class="tran3s">Item</a></li>
									<li><a href="#" class="tran3s">Refund Policy</a></li>
									<li><a href="contact-us.html" class="tran3s">Contact us</a></li>
								</ul>
							</div> <!-- /.footer-list-widget -->
							<div class="col-md-3 col-sm-4 col-xs-12 insta-feed">
								<h5>Quick Links</h5>
								<ul class="clearfix">
									<li><a href="#"><img src="images/home/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="images/home/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="images/home/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="images/home/7.jpg" alt=""></a></li>
									<li><a href="#"><img src="images/home/8.jpg" alt=""></a></li>
									<li><a href="#"><img src="images/home/9.jpg" alt=""></a></li>
								</ul>
							</div> <!-- /.insta-feed -->
							<div class="col-md-4 col-xs-12 col-xs-12 subscribe-widget">
								<div>
									<h5>Subscribe us</h5>
									<p>Sign up for get special offer news from us</p>
									<form action="#">
										<input type="text" placeholder="Your Email Address">
									</form>
									<ul>
										<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div> <!-- /.subscribe-widget -->
						</div> <!-- /.row -->	
					</div> <!-- /.container -->
				</div> <!-- /.top-footer-widget -->
				<div class="bottom-footer">
					<p>Copyright &copy;2017 <span class="p-color">Unifytheme</span></p>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-main-footer -->
  </body>
</html>