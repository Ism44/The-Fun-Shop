<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styleSheet/aboutus.css">
  <script src="https://kit.fontawesome.com/2c1caecb37.js" crossorigin="anonymous"></script>
  <title>Coming Soon</title>
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

  <div id="main-body" style="height:100vh;">

<form action="checkout.php" method="get">
    <div class="background">
      <!--Your code goes here-->
      <div class='order'>
    <?php
    $Email=$_POST["Email"];
    $pwd=$_POST["password"];
    $conn=mysqli_connect("localhost","root","","funshop");
    $stmt="select * from `users` where `Email`='$Email' AND `password`='$pwd'";
    $result=mysqli_query($conn,$stmt);
    $login=false;
    while ($row=mysqli_fetch_array($result)) {
      echo "<h3> Welcome $row[1]</h3>";
    }
  ?>
      </div>
</form>

  <!--Your code goes here-->
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
