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
    <span class="zoom nav-bar-item"> <a href="employee.php">Employees</a> </span>
    <span class="zoom nav-bar-item"> <a href="users.php">Users</a> </span>

    <span class="zoom nav-bar-item"> <a href="item-rep.php">items</a> </span>
    <span class="zoom nav-bar-item" style="font-size:30px;"> <a href="emp-signin.php">Sign up/ Log in</a> </span>
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


    <div class="background">
      <!--Your code goes here-->
      <div class='order'>
    <?php
    $Employee_email=$_POST["Employee_email"];
    $pwd=$_POST["Employee_password"];
    $conn=mysqli_connect("localhost","root","","funshop");
    $stmt="select * from `employee` where `Employee_email`='$Employee_email' AND `Employee_password`='$pwd'";
    $result=mysqli_query($conn,$stmt);
    $login=false;
    while ($row=mysqli_fetch_array($result)) {
      echo "<h3> Welcome Employee $row[1]</h3>";
    }
  ?>
      </div>


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

    <a href="employee.php">
  Employees
    </a><br>

    <a href="users.php">
      Users
    </a><br>




    <a href="item-rep.php">
      Items
    </a><br>




    <a href="emp-signin.php">
      Sign up/ log in
    </a><br>

</div>
  </footer>

</body>

</html>
