<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styleSheet/aboutus.css">
  <script src="https://kit.fontawesome.com/2c1caecb37.js" crossorigin="anonymous"></script>
  <style>
    .button {


    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;


    }

    .img {
      border-radius: 50%;
       height: 500px;
        width: 50vh;
         position:relative;
    }

    .button5 {
      border-radius: 50%;
    }
    table{align: center;"
  column-fill: 50px;}
  th, td {
  padding: 75px;
}
  </style>
  <title>Contact us</title>
</head>

<body>

    <nav class="header">
      <span class="zoom nav-bar-item"> <a href="index.php">Home</a> </span>
      <span class="zoom nav-bar-item"> <a href="cart.php">Cart <i class="fa fa-shopping-cart" style="font-size:36px"></i></a> </span>
      <span class="zoom nav-bar-item"> <a href="Aboutus.php">About us</a> </span>
      <span class="zoom nav-bar-item"> <a href="contactus.php"> Contact us</a> </span>
      <span class="zoom nav-bar-item" style="font-size:30px;"> <a href="login.php">Sign up/ Log in</a> </span>
      <span class="fill"> <div> </div> </span>
      <span class="search-bar nav-bar-item ">
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
      <h3 id="main-title"><img src="img/funshop3.png"> </h3> <br>

    </div>

    <div class="bottom-page">
      <div class="container">
        <div class="contact-us">
          <h3><a href="#">Contact Us</a></h3>
          <input type="text" name="email" placeholder="Your e-mail address (example@example.com)">
          <textarea name="message" placeholder="Message"></textarea>
          <input type="button" value="Send" id='btn' class="zoom">
        </div>
        <div class="social-media-links">
          <h3>Our official social media accounts</h3>
          <div>
            <a href="https://www.facebook.com/The-Fun-Shop-106272748570514/">
              <i class="fab fa-facebook-f">
                <span>Facebook</span>
              </i>
            </a>
          </div>
          <div>
            <a href="https://twitter.com/TheFunTop1">
              <i class="fab fa-twitter">
                <span>Twitter</span>
              </i>
            </a>
          </div>
          <div>
            <i class="fas fa-envelope-square">
              <span>support-mail@support-mail.com</span>
            </i>
          </div>
          <div>
            <i class="fas fa-phone">
              <span>0100 000 000</span>
            </i>
          </div>
        </div>
      </div>


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
