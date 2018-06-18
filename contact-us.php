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
    <h1>Contact  Us</h1>      
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu et mi sodales eleifend vel eu magna. Nulla ullamcorper odio eu pharetra aliquam. Nunc enim augue, mattis vitae pharetra sit amet, vulputate vel nunc. In lacinia elementum ex.</p>
  </div>
</div>
<section class="mbr-section form4 cid-qv5Aq4h3k3" id="form4-2y">


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--<div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>-->
                <div id="map"></div>
                   <script>
                    function myMap(){
                    var mapCanvas=document.getElementById("map");
                    var mapOptions={
                    center:new google.maps.LatLng(-33.8819625, 151.1602501), zoom: 11
                    };
                    var map= new google.maps.Map(mapCanvas, mapOptions); 
                    }
                    </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
                
            </div>
            <div class="col-md-6">
                <h2 style="font-size: 55px;">
                    Contact Us
                </h2>
                <div>
                    <div class="icon-block pb-3">
                        <h4>
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5>
                            Ready for offers and cooperation
                        </h5>
                        <p>
                            Phone: +1 (0) 000 0000 001 <br>
                            Email: youremail@mail.com
                        </p>
                    </div>
                </div>
                <div class="form-contact">
        
                    <form class="form-contact" ><input type="hidden" data-form-email="true" value="">
                        <div class="row">
                            <div class="col-md-6 multi-horizontal input">
                                <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Your Name" required="" >
                            </div>
                            <div class="col-md-6 multi-horizontal input">
                                <input type="text" class="form-control input" name="phone" data-form-field="Phone" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-12 multi-horizontal input">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" style="resize:none"></textarea>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 20px;">
                                <button href="" type="submit" class="btn btn-primary btn-form">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php include ('includes/footer.php'); ?>