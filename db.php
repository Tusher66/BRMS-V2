<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BRMS</title>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>BRMS - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name:BRMS
    Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body class="bodyr">
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="index.html"><h1>Building Rent Management System</br></h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index.html" >Home</a></li>
             <!-- <li role="presentation"><a href="about.html">About Us</a></li>-->
              <li role="presentation"><a href="db.php.php" class="active">REGISTRATION</a></li>
              <li role="presentation"><a href="gallery.html">Gallery</a></li>
              <li role="presentation"><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
</head>
<body>
<?php 
  $host ="localhost";
  $user ="root";
  $pass ="";
  $dbname ="tus";

  $connect = new mysqli($host,$user,$pass,$dbname);
  if($connect->connect_error){
    echo "Database connect ".$connect->connect_error;
  }
?>


<?php

      if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name        = $_POST["name"];
    $fathername    = $_POST["fathername"];
    $address      = $_POST["address"];
    $occupation        = $_POST["occupation"];
    $company     = $_POST["company"];
    $salary    = $_POST["salary"];
    $email      = $_POST["email"];



      /*$result = mysqli_query($connect, "SELECT * FROM housesearch WHERE city='".$city."' AND location='".$location."' AND status='".$status."' AND type='".$type."' AND bedroom='".$bedroom."' AND bathroom='".$bathroom."' AND price1='".$price1."' AND price2='".$price2."'");*/

       
     $sql = "INSERT INTO brms (name,fathername,address,occupation,company,salary,email) VALUES('".$name."','".$fathername."','".$address."','".$occupation."','".$company."','".$salary."','".$email."')";
      $result = mysqli_query($connect,$sql);
      if(!empty($result)){
       $successfull ="You have been saved successfully..";
      }

  }
        
?>




<div class="form">
<h3>Owner Registration From</h3>
<form action="db.php.php" method="post">
<input type="text" name="name" placeholder="Name" required />
<input type="text" name="fathername" placeholder="Father Name" required />
<input type="text" name="address" placeholder="Address" required />
<input type="text" name="occupation" placeholder="Occupation" required />
<input type="text" name="company" placeholder="Company" required />
<input type="text" name="salary" placeholder="Salary" required />
<input type="email" name="email" placeholder="Email" required />
<!--<input type="password" name="password" placeholder="Password" required />-->
<input type="submit" name="submit" value="Register" />
</form>
</div>

<footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>About Us</h4>
        <p>Building Rent Management System</p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Kasobpur,Rajpara,Rajshahi 6000 </li>
            <li><i class="fa fa-phone fa"></i> +8801754343120</li>
            <li><i class="fa fa-envelope fa"></i>tusher66@gmail.com</li>
          </ul>
        </div>
      </div>

      <!--<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4>Photo Gallery</h4>
          <ul class="sidebar-gallery">
            <li><a href="#"><img src="img/gallery1.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery2.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery3.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery4.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery5.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery6.png" alt="" /></a></li>
          </ul>
        </div>
      </div>-->

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4>Newsletter Registration</h4>
          <p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
          <div class="btn-gamp">
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
          </div>
          <div class="btn-gamp">
            <a type="submit" class="btn btn-default">Subscribe</a>
          </div>

        </div>
      </div>

    </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
          &copy; Building Rent Management System. All Rights Reserved.
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Day
            -->
            Designed by <a href="https://bootstrapmade.com/">Tusher</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>

</body>
</html>