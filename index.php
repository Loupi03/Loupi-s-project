<?php 

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
  echo "rr";
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>LOUPI</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="icon" href="../Project/assets/images/Loupi.png" >
    <style>
      <?php 
      require "fbi.css"; ?>
    </style>
  </head>
<body>

<?php include 'menu.php'; ?>

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to Loupi</h6>
            <h2>Play, Thrive, Conquer!</h2>
            <p>Welcome to Loupi, where the world of gaming comes alive! Immerse yourself in a digital paradise where passion meets play. At Loupi, we're more than just a store , we're your ultimate gaming destination, offering a diverse and thrilling collection of games for all platforms.</p>
            <div class="search-input">
              <form id="search" >
                <input type="text" placeholder="Type Something" id='searchText' />
                <button role="button">Search Now</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <a href="Horizon Zero Dawn.html"><img src="assets/images/Horizon Zero Dawn.png" alt=""></a>
            <span class="price">$12</span>
            <span class="offer">-60%</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Popular Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="Our shop.html">View All</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="Fortnite.html"><img src="assets/images/fortnite.png" alt=""></a>
              <span class="price"><em>$10</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Battle Ground</span>
              <h4>Fortnite</h4>
              <a href="Fortnite.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="FC 24.html"><img src="assets/images/fc 24.png" alt=""></a>
              <span class="price"><em>$45</em>$30</span>
            </div>
            <div class="down-content">
              <span class="category">Sport</span>
              <h4>FC 24</h4>
              <a href="FC 24.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="ufc 5.html"><img src="assets/images/UFC 5.png" alt=""></a>
              <span class="price"><em>$52</em>$34</span>
            </div>
            <div class="down-content">
              <span class="category">Sport</span>
              <h4>UFC 5</h4>
              <a href="ufc 5.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="Minecraft.html"><img src="assets/images/minecraft.png" alt=""></a>
              <span class="price">$32</span>
            </div>
            <div class="down-content">
              <span class="category">Open World</span>
              <h4>Minecraft</h4>
              <a href="Minecraft.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Most Played</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="Our shop.html">View All</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="2K24.html"><img src="assets/images/2K24.png" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Sport</span>
                <h4 id="Item-title">2K24</h4>
                <a href="2K24.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="Fortnite.html"><img src="assets/images/fortnite.png" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Battle-Ground</span>
                <h4 id="Item-title">Fortnite</h4>
                <a href="Fortnite.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="ufc 5.html"><img src="assets/images/UFC 5.png" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Sport</span>
                <h4 id="Item-title">UFC 5</h4>
                <a href="ufc 5.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="FC 24.html"><img src="assets/images/fc 24.png" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Sport</span>
                <h4 id="Item-title">FC 24</h4>
                <a href="FC 24.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="Minecraft.html"><img src="assets/images/minecraft.png" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Open-World</span>
                <h4 id="Item-title">Minecraft</h4>
                <a href="Minecraft.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="GTA 5.html"><img src="assets/images/gta.webp" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Action-Adventure</span>
                <h4 id="Item-title">GTA 5</h4>
                <a href="GTA 5.html">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>Top Categories</h2>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action-Adventure</h4>
            <div class="thumb">
              <a href="GTA 5.html"><img src="assets/images/gta.webp" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Open World </h4>
            <div class="thumb">
              <a href="The witcher.html"><img src="assets/images/trending-01.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action-Survival</h4>
            <div class="thumb">
              <a href="Dying light.html"><img src="assets/images/dying light.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Sport</h4>
            <div class="thumb">
              <a href="FC 24.html"><img src="assets/images/fc 24.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Battle-Ground</h4>
            <div class="thumb">
              <a href="APEX.html"><img src="assets/images/apex.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section CTA">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>EXPLORE OUR Shop</h6>
                  <h2>Discover the Latest Releases and Exclusive Offers!</h2>
                </div>
                <p>Explore the latest titles and exclusive deals for an unforgettable gaming journey.</p>
                <div class="main-button">
                  <a href="Our shop.html">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>JOIN OUR COMMUNITY</h6>
                  <h2>Unlock Exclusive Discounts of Up to $35!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" >
                    <input type="email"  placeholder="Your email...">
                    <button type="submit">Join Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © LOUPI Gaming Company. <br> All rights reserved.</p>
      </div>
    </div>
  </footer>
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>














