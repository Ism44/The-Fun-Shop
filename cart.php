<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styleSheet/aboutus.css">
  <script src="https://kit.fontawesome.com/2c1caecb37.js" crossorigin="anonymous"></script>
  <title>Cart</title>
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
      <?php
      error_reporting(0);
      $price= array('1' =>'297600 ' ,'2' =>'2100000 ', '3' =>'2630000 ', '4' =>'3500000 ', '5' =>'1200000' ,
      '6' =>'600000 ' , '7' =>'2000000 ' , '8' =>'430000 ', '9' =>'550000 ', '10' =>'1500000 ');
      $name = array('1' =>'>Porsche 911 turbo cabriolet 2021' ,'2' =>'Porsche Macan 2022', '3' =>'Porsche 911 turbo', '4' =>'LAND CRUISER', '5' =>'TOYOTA GR' ,
      '6' =>'Toyota C-HR' , '7' =>'Dodge Durango SRT HELLCAT' , '8' =>'EMGRAND X7', '9' =>'Geely Coolray', '10' =>'Dodge Challenger SRT HELLCAT 2021');
      $item=$_GET["item"];
      $offer=$_GET["offer"];
      $sum=0;
      echo "<div class'margin'><p>..</p></div>";

      echo "<div class='order'>";
      if ($item>=1) {
        foreach ($item as $i ) {
            echo "<div class='orderitem'> <div class='orderimg'><img src='img/item$i.jpg' alt='xxx' style='width:125px;height:130px;'> </div>
            <br><p class='details'>
            item name: $name[$i]<br>
            Item price: $price[$i]</p></div>
             ";
$sum=$sum+$price[$i];
        }
        echo " <div class='total'>Your total is $sum EGP </div>";
        echo "<div><label class='checkbox1'>
         <input type='checkbox' name='sum' value='$sum'>
         <h3 style=' font-size:15px; background-color:black;'>Terms & conditions</h3>
                 </label></div>";
        echo "    <div class='checkoutform'> <input style='border: 2px solid white;' type='submit' value='Proceed to Checkout' class='reset'> </div>";
      }
      elseif ($offer>=1) {
        foreach ($offer as $x ) {
            echo "<div class='orderitem'> <div class='orderimg'><img src='img/offer4.jpg' alt='xxx' style='width:125px;height:130px;'> </div>
            <br><p class='details'>
            item name: $name[$x]<br>
            Item price: $price[$x]</p></div>
             ";
  $sum=$sum+$price[$x];
        }
        echo " <div class='total'>Your total is $sum EGP </div>";
        echo "<div><label class='checkbox1'>
         <input type='checkbox' name='sum' value='$sum'>
         <h3 style=' font-size:15px; background-color:black;'>Terms & conditions</h3>
                 </label></div>";
        echo "    <div class='checkoutform'> <input style='border: 2px solid white;' type='submit' value='Proceed to Checkout' class='reset'> </div>";
      }


  else {
      echo "Your shopping Cart is Empty";
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
