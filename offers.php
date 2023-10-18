<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styleSheet/offers.css">
  <script src="https://kit.fontawesome.com/2c1caecb37.js" crossorigin="anonymous"></script>
  <title>Offers</title>
</head>

<body>
  <nav class="header">
    <span class="zoom nav-bar-item"> <a href="index.php">Home</a> </span>

    <span class="zoom nav-bar-item"> <a href="cart.php">Cart <i class="fa fa-shopping-cart" style="font-size:36px"></i></a> </span>
    <span class="zoom nav-bar-item"> <a href="Aboutus.php">About us</a> </span>
    <span class="zoom nav-bar-item"> <a href="contactus.php"> Contact us</a> </span>
    <span class="zoom nav-bar-item" style="font-size:30px;"> <a href="login.php">Sign up/ Log in</a> </span>
    <span class="search-bar nav-bar-item">
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

      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/offer1.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/offer2.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/offer3.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {+-

          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>

      <form class="cartitem" action="cart.php" method="get">
 <h1 style="  font-size: 80px;
  color: #C958D6;"> Winter offers(10% OFF)</h1>
  <div class="winteroffers">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/item1.jpg" alt="xxx" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1 style="color: black;font-size:50px;">Grand theft auto V</h1>
        <h2><strike>500 EGP</strike></h2>
        <h2>450 EGP</h2>
    <h2 style="color:green;">available</h2>
    <label class="checkbox">
    <input type="checkbox" name="offer[]" value="11">
    <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
            </label>

</div>
</div>
</div>
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="img/item2.jpg" alt="xxx" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                  <h1 style="color: black;font-size:50px;"> Naraka Blade point</h1>
                  <h2><strike>650 EGP</strike></h2>
                  <h2>585</h2>
                      <h2 style="color:green;">available</h2>
                      <label class="checkbox">
                      <input type="checkbox" name="offer[]" value="12">
                      <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                              </label>

    </div>
  </div>
  </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/item8.jpg" alt="xxx" style="width:300px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1 style="color: black;font-size:50px;">The witcher III</h1>
          <h2><strike>700</strike></h2>
          <h2>630 EGP</h2>
              <h2 style="color:green;">available</h2>
              <label class="checkbox">
              <input type="checkbox" name="offer[]" value="13">
              <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                      </label>

        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/item9.jpg" alt="xxx" style="width:300px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1 style="color: black;font-size:50px;">Red Dead Redemption 2</h1>
          <h2><strike>950</strike></h2>
          <h2>855 EGP</h2>
              <h2 style="color:green;">available</h2>
              <label class="checkbox">
              <input type="checkbox" name="offer[]" value="14">
              <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                      </label>

        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/item5.jpg" alt="xxx" style="width:300px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1 style="color: black;font-size:50px;">50 USD steam gift card</h1>
          <h2><strike>850</strike></h2>
          <h2>765 EGP</h2>
            <h2 style="color:green;">available</h2>
            <label class="checkbox">
            <input type="checkbox" name="offer[]" value="15">
            <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                    </label>

        </div>
      </div>
    </div>
</div>
  <h1 style="  font-size: 80px;
  color: #C958D6;">Bundle Deals! </h1>
<div class="bundledeals">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/item6.jpg" alt="xxx" style="margin-top: 30px; width:140px;height:250px;"> +
            <img src="img/item7.jpg" alt="xxx" style="margin-top: 30px; width:140px;height:250px;">
          </div>

          <div class="flip-card-back">
            <h1  style="color: black;font-size:30px;">Mechanical Keyboard and mouse bundle + Logitech G733</h1>
            <h2 style="color:#C55700;"><strike>2750</strike></h2>
            <h2 >2500</h2>
            <label class="checkbox">
            <input type="checkbox" name="offer[]" value="16">
            <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                    </label>

</div>
</div>
</div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/item1.jpg" alt="xxx" style="margin-top: 30px; width:140px;height:250px;"> +
            <img src="img/item9.jpg" alt="xxx" style="margin-top: 30px; width:140px;height:250px;">
          </div>
          <div class="flip-card-back">
            <h1  style="color: black;font-size:50px;"> The Rockstar Bundle</h1>
            <h2 style="color:#C55700;"><strike>1450</strike></h2>
            <h2 >1300</h2>
            <label class="checkbox">
            <input type="checkbox" name="offer[]" value="17">
            <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                    </label>
</div>
</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
    <img src="img/item2.jpg" alt="xxx" style="margin-top: 30px; width:140px;height:250px;"> +
            <img src="img/item5.jpg" alt="xxx" style="margin-top: 30px; width:140px;height:250px;">
  </div>
  <div class="flip-card-back">
    <h1  style="color: black;font-size:30px;">Naraka Bladepoint + 50 USD for cosmetics or more!</h1>
            <h2 style="color:#C55700;"><strike>1500</strike></h2>
            <h2 >1350</h2>
            <label class="checkbox">
            <input type="checkbox" name="offer[]" value="18">
            <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                    </label>

  </div>
</div>
</div>

</div>

    <h1 style="  font-size: 80px;
    color: #C958D6;">New Year Offers (30%) </h1>
<div class="newyearoffers">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="img/item3.jpg" alt="xxx" style="width:300px;height:300px;">
            </div>

            <div class="flip-card-back">
              <h1  style="color: black;font-size:30px;">Custom designed PS4 controller</h1>
              <h2 style="color:#C55700;"><strike>799</strike></h2>
              <h2 >560</h2>
              <label class="checkbox">
              <input type="checkbox" name="offer[]" value="19">
              <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                      </label>

  </div>
  </div>
  </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="img/item4.jpg" alt="xxx" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1  style="color: black;font-size:50px;"> PS5 controller standard edition Blue</h1>
              <h2 style="color:#C55700;"><strike>1000</strike></h2>
              <h2 >700</h2>
              <label class="checkbox">
              <input type="checkbox" name="offer[]" value="20">
              <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
                      </label>
  </div>
  </div>
  </div>

  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/item10.jpg" alt="xxx" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1  style="color: black;font-size:50px;"> Assassin's Creed Valhalla</h1>
              <h2 style="color:#C55700;"><strike>750</strike></h2>
              <h2 >525</h2>
              <label class="checkbox">
              <input type="checkbox" name="offer[]" value="21">
              <h3 style=" font-size:15px; background-color:#291240;">Add to cart</h3>
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

  </div>

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
