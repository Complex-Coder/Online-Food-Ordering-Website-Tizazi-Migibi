<?php
  session_start();
?>

<html>
  <head>
    <title> About | Ti'zazi Migibi </title>
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  </head>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <p>Top</p>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };
      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Ti'zazi Migibi</a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
<?php
  if(isset($_SESSION['login_user1'])){
?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php">Log Out</a></li>
          </ul>
<?php
  }
  else if (isset($_SESSION['login_user2'])) {
?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php">Food Zone </a></li>
            <li><a href="cart.php">Cart
            [<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]);
              echo "$count";
            }else{
              echo "0";
            }
            ?>]
            </a></li>
            <li><a href="logout_u.php">Log Out </a></li>
          </ul>
<?php
  }
  else {
?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="customersignup.php"> User Sign-up</a></li>
                <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              </ul>
            </li>
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="customerlogin.php"> User Login</a></li>
                <li> <a href="managerlogin.php"> Manager Login</a></li>
              </ul>
            </li>
          </ul>
<?php
  }
?>
        </div>
      </div>
    </nav>
    <div class="wide">
      <div class="tagline">It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></div>
      <h3 style="color: rgb(255, 255, 255); padding: 10px;">About the food culture in Ti'zazi Migibi:</h3>
      <h3 style="color: rgb(255, 255, 255); padding: 10px;">Order food & beverages online from restaurants near & around you. </h3>
      <h3 style="color: rgb(255, 255, 255); padding: 10px;">We deliver food from your neighborhood local joints, your favorite cafes, luxurious & elite restaurants in your area</h3>
      <h3 style="color: rgb(255, 255, 255); padding: 10px;"> And also from chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway, Faasos, Cafe Coffee Day, Taco Bell, and more. Exciting bit?</h3>
      <h3 style="color: rgb(255, 255, 255); padding: 10px;"> We place no minimum order restrictions! Order in as little (or as much) as you'd like. We'll Deliver It to you!</h3>
    </div>
  </body>
</html>
