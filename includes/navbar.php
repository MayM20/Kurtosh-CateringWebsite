<!--SECOND NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
  <a class="navbar-brand" href="index.php">
      <img class="logo" src="images/graphics/black_logo.png" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto"><!--ml-auto align items to the right, unlike mr-auto-->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us.php">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products-kurtosh.php">
          SHOP
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="locations.php">LOCATIONS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contact-us.php">CONTACT US</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
      <input class="form-control mr-sm-2" type="search" name="keywords" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
      <!--TOP NAVBAR-->
  <div class="top_bar">
    <div class="container">
      <div class="columns sixteen">
        <ul>
            <?php
                $cart = new ShoppingCart();
                $cart_count = $cart -> getCartCount();
            ?>
            <?php
              if(isset($_SESSION["username"]) && !empty($_SESSION["username"]))
              
              {
                echo '<li><a href="logout.php">Logout</a></li>';
                echo "<div class=\"myaccount\">" . "Welcome " . "<span class=\"user-underscore\">" . $_SESSION["username"] . "</span>" . "</div>";
                echo '<li><a href="shoppingcart.php" class="nav-icon cart mx-1"><img src="images/graphics/icon-cart.png"><span id="cart-count" class="badge badge-primary">' . $cart_count . '</span>
                      </a>
                      </li>';
              }
              else
              {
                echo '<li><a href="login.php" id="customer_login_link">Log in</a></li>';
                echo '<li><a href="register.php"><span class="icon-cart"></span>or Register</a></li>';
                echo '<li><a href="shoppingcart.php" class="nav-icon cart mx-1"><img src="images/graphics/icon-cart.png"><span id="cart-count" class="badge badge-primary">' . $cart_count . '</span>
                      </a>
                      </li>';
              }
              ?>
        </ul>
      </div>
    </div>
  </div>
</nav>