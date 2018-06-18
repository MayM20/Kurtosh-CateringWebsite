<!doctype html>
<html>
<?php 
  include ('includes/head.php');
  include('autoloader.php');
?>
 <body>
<?php include('includes/navbar.php'); ?>
     <div class="jumbotron jumbotron-fluid">
<div class="container">
    <h1>Locations</h1>      
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu et mi sodales eleifend vel eu magna. Nulla ullamcorper odio eu pharetra aliquam. Nunc enim augue, mattis vitae pharetra sit amet, vulputate vel nunc. In lacinia elementum ex.</p>
  </div>
</div>
        <div class="container">
            <div class="row">
            <div class="col">
                <h2>Kurtosh House No.1</h2>
                <p>20B-20C St Pauls Street Randwick NSW 2031
                <br>02 9399 8412
                <br>Opening Hours
                <br>Monday - Friday: 7am - 10pm
                <br>Saturday - Sunday & Public Holidays: 8am - 10pm
                </p>
                </div>
                
            <div class="col">
                <h2 align="right">Kurtosh House No.2</h2>
                <p align="right">604-606 Crown Street Surry Hills NSW 2010
                <br>02 9319 7701
                <br>Opening Hours
                <br>Monday - Friday: 7am - 10pm
                <br>Saturday - Sunday & Public Holidays: 8am - 10pm
                </p>
                </div>
            </div> 
        <div class="row">
            <!--map Radnwick-->
            <div class=col></div>
        <div class="col-6">
            <div id="map">
            <script>
            function myMap(){
            var mapCanvas=document.getElementById("map");
            var mapOptions={
                center:new google.maps.LatLng(-33.9203821, 151.2378041), zoom: 15
            };
            var map= new google.maps.Map(mapCanvas, mapOptions); 
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
            </div>
        </div>
        <div class="col"></div>
           
            
            
            
            </div>
            <div class="row">
                <div class="col">
                <h2>Kurtosh House No.3</h2>
                 <p>110-112 Willoughby Road Crows Nest NSW 2065
                <br>02 9399 8412
                <br>Opening Hours
                <br>Monday - Friday: 7am - 10pm
                <br>Saturday - Sunday & Public Holidays: 8am - 10pm
                </p>
                </div>
                <div>
                <h2 align="right">Kurtosh House No.4</h2>
                <p align="right">316 Victoria Street Darlinghurst NSW 2010
                <br>02 9399 8412
                <br>Opening Hours
                <br>Monday - Friday: 7am - 10pm
                <br>Saturday - Sunday & Public Holidays: 8am - 10pm
                </p>
                </div>
        </div>
    </div>
</body>
</html>
<?php include ('includes/footer.php'); ?>