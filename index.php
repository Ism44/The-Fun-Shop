<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./styleSheet/aboutus.css">
  <script src="https://kit.fontawesome.com/2c1caecb37.js" crossorigin="anonymous"></script>
  <style>

  </style>
  <title>Home</title>

</head>

<body>

  <nav class="header">
    <span class="zoom nav-bar-item"> <a href="index.php">Home</a> </span>
    <span class="zoom nav-bar-item"> <a href="cart.php">Cart <i class="fa fa-shopping-cart" style="font-size:36px"></i></a> </span>
    <span class="zoom nav-bar-item"> <a href="Aboutus.php">About us</a> </span>
    <span class="zoom nav-bar-item"> <a href="contactus.php"> Contact us</a> </span>
    <span class="zoom nav-bar-item" style="font-size:30px;"> <a href="login.php">Sign up/Log in</a> </span>
    <span class="search-bar nav-bar-item homesearch">
      <input type="text" name="search" placeholder="Search">
      <button id="search-button">
        <i class="fa fa-search"></i>
      </button>
    </span>
    <div class="zoom nav-bar-item" id="logo-div">
      <span id="logo"> <span style="font-family: fantasy, sans-serif; color:white;"> NAB</span> cars</span>
    </div>
  </nav>
  <div id="main-body">

    <div class="background">
      <!--Your code goes here-->
      <form class="cartitem" action="cart.php" method="get">
      <h3 id="main-title"><img src="img/funshop3.png"> </h3>
<div class="itemscontainer">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="img/item1.jpg" alt="xxx" style="width:340px;height:300px;">
                </div>
                <div class="flip-card-back">
                  <h1 style="color:white;font-size:50px;">Porsche 911 turbo cabriolet 2021</h1>
                  <h2>297,600 USD</h2>
                  <h2 style="color:green;">available</h2>
                  <label class="checkbox">
                   <input type="checkbox" name="item[]" value="1">
                   <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
                           </label>

    </div>
  </div>
  </div>

            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="img/item2.jpg" alt="xxx" style="width:340px;height:300px;">
                </div>
                <div class="flip-card-back">
                  <h1 style="color: white;font-size:50px;"> Porsche Macan 2022 </h1>
                  <h2>1,400,000 up to 2,100,000 EGP</h2>
                  <h2 style="color:green;">available</h2>
                  <label class="checkbox">
                   <input type="checkbox" name="item[]" value="2">
                   <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
                           </label>

    </div>
  </div>
  </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/item3.jpg" alt="xxx" style="width:340px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1 style="color: white;font-size:50px;">Porsche 911 turbo</h1>
          <h2>2,630,000 EGP</h2>
          <h2 style="color:green;">available</h2>
          <label class="checkbox">
           <input type="checkbox" name="item[]" value="3">
           <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
                   </label>

        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/item4.jpg" alt="xxx" style="width:340px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1 style="color: white;font-size:50px;">LAND CRUISER</h1>
          <h2>3,500,000 EGP</h2>
          <h2 style="color:green;">available</h2>
          <label class="checkbox">
           <input type="checkbox" name="item[]" value="4">
           <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
                   </label>

        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/item5.jpg" alt="xxx" style="width:340px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1 style="color: white;font-size:50px;">TOYOTA GR</h1>
          <h2>1,200,000 EGP</h2>
          <h2 style="color:green;">available</h2>
          <label class="checkbox">
           <input type="checkbox" name="item[]" value="5">
           <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
                   </label>

        </div>
      </div>
    </div>


      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/item6.jpg" alt="xxx" style="width:340px;height:300px;">
          </div>
          <div class="flip-card-back">
            <h1  style="color: white;font-size:50px;">Toyota C-HR</h1>
            <h2>600,000 EGP</h2>
            <h2 style="color:green;">available</h2>
            <label class="checkbox">
             <input type="checkbox" name="item[]" value="6">
             <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
                     </label>
</div>
</div>
</div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/item7.jpg" alt="xxx" style="width:340px;height:300px;">
          </div>
          <div class="flip-card-back">
            <h1  style="color:white;font-size:50px;">Dodge Durango SRT HELLCAT</h1>
            <h2>2,000,000 EGP</h2>
            <h2 style="color:green;">available</h2>
            <label class="checkbox">
             <input type="checkbox" name="item[]" value="7">
             <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
                     </label>

</div>
</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
    <img src="img/item8.jpg" alt="xxx" style="width:340px;height:300px;">
  </div>
  <div class="flip-card-back">
    <h1 style="color: white;font-size:50px;">EMGRAND X7</h1>
    <h2>430,000 EGP</h2>
    <h2 style="color:green;">available</h2>
    <label class="checkbox">
     <input type="checkbox" name="item[]" value="8">
     <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
             </label>

  </div>
</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
    <img src="img/item9.jpg" alt="xxx" style="width:340px;height:300px;">
  </div>
  <div class="flip-card-back">
    <h1  style="color: white;font-size:50px;"> Geely Coolray</h1>
    <h2>550,000 EGP</h2>
    <h2 style="color:green;">available</h2>
    <label class="checkbox">
     <input type="checkbox" name="item[]" value="9">
     <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
             </label>

  </div>
</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
    <img src="img/item10.jpg" alt="xxx" style="width:340px;height:300px;">
  </div>
  <div class="flip-card-back">
    <h1 style="color: white;font-size:50px;">Dodge Challenger SRT HELLCAT 2021</h1>
    <h2>1,500,000 EGP</h2>
    <h2 style="color:green;">available</h2>
    <label class="checkbox">
     <input type="checkbox" name="item[]" value="10">
     <h3 style=" font-size:15px; background-color:black;">Add to cart</h3>
             </label>

  </div>
</div>
</div>
</div>
  <!--Your code goes here-->
  </div>
  <div class="cart">

<input class="addtocart" type="submit" value="Proceed to Cart">
</div>
</form>

  <footer>
     <div>  <p style="text-align:center;"> Copyright &copy; NAB Cars</p> <div>
    <div class="top10">

      <a href="https://www.facebook.com/groups/298202572498801">
        <i class="fab fa-facebook-f">
          Facebook
        </i>
      </a><br>

      <a href="https://twitter.com/NABCARS">
        <i class="fab fa-twitter">
          Twitter
        </i>
      </a><br>

      <i class="fas fa-envelope-square">
        <span>support-mail@support-mail.com</span>
      </i><br>

      <i class="fas fa-phone">
        <span>0100 000 000</span>
      </i><br>

  </div>

  <div class="top11">

    <a href="index.php">
      Home
    </a><br>



    <a href="cart.php">
    cart  <i class="fa fa-shopping-cart" style="font-size:15px"> </i>
    </a><br>

    <a href="aboutus.php">
        about us
    </a><br>


    <a href="contactus.php">
        contact us
    </a><br>

    <a href="login.php">
        Sign up/ log in
    </a><br>

</div>
  </footer>
</body>

</html>
