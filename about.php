<?php
session_start();

if(!isset($_SESSION['id'])) {
  $_SESSION['preLocation'] = 'about.php';
header("location:./login.php");

}
?>
<!DOCTYPE html>
<html>
<head>
<title>
</title>
<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="shiv.css">

  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div style="background-color:white" class="container">
  <div class="row">
  
    <div class="col-sm">
    <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="img/logg.png" alt="image"/></a> </div>
      </div>
        
    </div>
    <div class="col-sm">
    <div class="col-sm-3 col-md-2">
          <div class="logo"><a href="http://carrental.epizy.com/">
            <strong  style="color:black">carrental.epizy.com</strong><br><p>Hurryup!</p>
          </a></div>
      </div>
        
    </div>
    <div class="col-sm">
    <p style="text-align:center"><b>For support mail us on:</b><br><i class="fa fa-envelope" style="font-size:20px;color:white"></i>shivani151020@gmail.com</p>
    </div>
    
    <div class="col-sm">   
       <a class="linkk" href="index.php">Logout</a>
  </div> 
    </div>
  </div>
</div>
   

<!--navbar-->
<?php include('navbar.php');?>
<!-- /navbar --> 
<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/48.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>cars for your safe travel!</h3>
        <p>We have more than a thousand cars for you to choose.</p>
      </div>   
    </div>
  </div>
</div>




<!-- The Band Section -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">How it works?</h2>
    <p class="w3-opacity"><i>Online Rental Car</i></p>
    <p class="w3-justify">One of our top priorities is to adjust each package we offer to our customer’s exact needs. We offer a variety of options that can enhance your experienc
    e, Always according to your necessities, and help you get the best out of your holidays or your business trip.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p><b>Step 1</b></p>
        <img src="img/19.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        <p>Search and book</p>
      </div>
      <div class="w3-third">
        <p><b>Step 2</b></p>
        <img src="img/47.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        <p>Ride your car</p>
      </div>
      
      <div class="w3-third">
        <p><b>Step 3</b></p>
        <img src="img/46.jpg" class="w3-round" alt="Random Name" style="width:60%">
        <p>Return</p>
      </div>
    </div>
  </div>

<!-- Footer -->
<footer style="background-color:black" class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 style="color:white" class="text-uppercase mb-4 font-weight-bold">INAVISH car rental</h6>
        <p  style="color:white">Car rental from Bangalore Airport<br>
Car rental from Pune Airport<br>
Car rental from Delhi Airport<br>
Car rental from Mumbai Airport<br>
Car rental from Chennai Airport<br>
Car rental from Indore Airport</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6  style="color:white" class="text-uppercase mb-4 font-weight-bold">Our Cars</h6>
        <p>
          <a  style="color:White"  href="#!" >BMW</a>
        </p>
        <p>
          <a style="color:white" href="#!">Mercedes</a>
        </p>
        <p>
          <a style="color:white" href="#!">Audi</a>
        </p>
        <p>
          <a style="color:white" href="#!">Lombergini</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 style="color:white"class="text-uppercase mb-4 font-weight-bold">Pages</h6>
        <p>
          <a  style="color:white" href="index.php">Home</a>
        </p>
        <p>
          <a  style="color:white" href="booking.php">Book your car</a>
        </p>
        <p>
          <a  style="color:white" href="about.php">About Us</a>
        </p>
        <p>
          <a  style="color:white" href="contactus.php">Contact Us</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div style="color:white" class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 style="color:white"class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i style="color:white" class="fas fa-home mr-3"></i> India,maharashtra,Mumbai</p>
        <p>
          <i style="color:white" class="fas fa-envelope mr-3"></i> shivani151020@gmail.com</p>
        <p>
          <i style="color:white" class="fas fa-phone mr-3"></i> +91-8286455269</p>
        <p>
          <i style="color:white" class="fas fa-print mr-3"></i>+91-8286455269</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">
        <p style="color:white" class="text-center text-md-left">Online Car Rental:
          <a href="http://carrental.epizy.com/">
            <strong  style="color:red">carrental.epizy.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i style="color:white" class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i style="color:white" class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>