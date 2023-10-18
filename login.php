<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleSheet/template.css">
      <link rel="stylesheet" href="./styleSheet/login.css">

    <script src="https://kit.fontawesome.com/2c1caecb37.js" crossorigin="anonymous"></script>
    <title>Login/ sign up</title>
</head>
    <body>
        <nav class="header">
            <span class="zoom nav-bar-item"> <a href="index.php">Home</a> </span>
            <span class="zoom nav-bar-item"> <a href="cart.php">Cart <i class="fa fa-shopping-cart" style="font-size:36px"></i></a> </span>
            <span class="zoom nav-bar-item"> <a href="Aboutus.php">About us</a> </span>
            <span class="zoom nav-bar-item"> <a href="contactus.php">Contact us</a> </span>
            <span class="zoom nav-bar-item" style="font-size:30px;"> <a href="login.php">Signup/ log in</a> </span>
                  <span class="fill"> <div> </div> </span>
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
                <h3 id="main-title"><img src="img/funshop3.png">  </h3>

            </div>
            <div class="content">
              <form action="userlogin.php" method="post">
                <div class="row">
                  <h2 style="text-align:center">Login with Social Media or Manually</h2>
                  <div class="vl">
                    <span class="vl-innertext">or</span>
                  </div>

                  <div class="col">
                    <a href="https://www.facebook.com/" class="fb btn">
                      <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                     </a>
                    <a href="https://twitter.com/?lang=en" class="twitter btn">
                      <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                    </a>
                    <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="google btn"><i class="fa fa-google fa-fw">
                      </i> Login with Google+
                    </a>
                  </div>

                  <div class="col">
                    <div class="hide-md-lg">
                      <p>Or sign in manually:</p>
                    </div>

                    <input class="cred" type="text" name="Email" placeholder="@email.com" required>
                    <input class="cred" type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                  </div>

                </div>
              </form>
              <div class="bottom-container">
                <div class="row">
                  <div class="col">
                    <a href="signup.php" style="color:white" class="btn">Sign up</a>
                  </div>
                  <div class="col">
                    <a href="emp-signin.php" style="color:white" class="btn">Sign in as an Employee</a>
                  </div>
                </div>
              </div>
            </div>



            <div class="bottom-page">


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

                <a href="Aboutus.php">
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
            </div>
        </div>

    </body>
</html>
