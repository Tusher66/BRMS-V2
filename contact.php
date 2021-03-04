<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Day - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Day
    Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
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
            <a href="index.html">
              <h1>Building Rent Management System</h1>
            </a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index.html">Home</a></li>
              <!--<li role="presentation"><a href="about.html">About Us</a></li>-->
              <li role="presentation"><a href="rowner.php">REGISTRATION</a></li>
              <li role="presentation"><a href="gallery.html">Gallery</a></li>
              <li role="presentation"><a href="contact.php" class="active">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->


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

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    
    $message = $_POST["message"];
   
  



      /*$result = mysqli_query($connect, "SELECT * FROM housesearch WHERE city='".$city."' AND location='".$location."' AND status='".$status."' AND type='".$type."' AND bedroom='".$bedroom."' AND bathroom='".$bathroom."' AND price1='".$price1."' AND price2='".$price2."'");*/

       
     $sql = "INSERT INTO cont (name,email,subject,message) VALUES('".$name."','".$email."','".$subject."','".$message."')";
      $result = mysqli_query($connect,$sql);
      if(!empty($result)){
       $successfull ="You have been saved successfully..";
      }

  }
        
?>



<h1>Contact Us</h1>
    
    <h2>How may we assist you?</h2>

    <p>It's easy to contact us with your questions, comments, and suggestions. We will do our best to answer your questions, and if you have an idea on how to improve our product, we will be happy to submit your idea to our development team for their consideration.Email support is available 24/7 and all requests are answered as soon as possible.Phone support is available from 7 a.m. to 4 p.m. (PST) Monday through Friday, except for major holidays.</p>

        <div class="container">
      
        <!--<h4>About Us</h4>
        <p>Building Rent Management System</p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Kasobpur,Rajpara,Rajshahi 6000 </li>
            <li><i class="fa fa-phone fa"></i> +8801754343120</li>
            <li><i class="fa fa-envelope fa"></i>tusher66@gmail.com</li>
          </ul>
        </div>-->
      </div>
        

        <br />
        <!--<p class="large">Learn <a href="../../about-us/" title="Learn About Us">About Us &rsaquo;</a></p>-->





  <!--<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>-->

  <section class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>Drop Your Message</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="contact.php" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <!--<input type="submit" name="submit" value="Submit Message" />-->
            <div class="text-center"><button type="submit" name="submit" value="Submit Message" class="btn btn-primary btn-lg" required="required">Submit Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->


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
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <h4>Newsletter Registration</h4>
        <p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
        <div class="btn-gamp">
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
        </div>
        <div class="btn-gamp">
          <a type="submit" class="btn btn-default">Subscribe</a>
        </div>
      </div>-->
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
          &copy;  Building Rent Management System. All Rights Reserved.
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
  <script src="contactform/contactform.js"></script>

</body>

</html>
