<?php
session_start();

if(!isset($_SESSION['id'])) {
  $_SESSION['preLocation'] = 'index.php';
header("location:./login.php");

}?>
<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta charset="utf-8">
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
<body >

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
    <a class="linkk" href="logout.php">Logout</a>
  </div> 
    </div>
  </div>
</div>
   



<nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="linkk" href="#">Get Your Car</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homeindex.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="service.php">Car listing</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="genrate.php">My Profile</a>
      </li>
    </ul>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/6.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>FIND THE RIGHT CAR FOR YOU.</h3>
        <p>We have more than a thousand cars for you to choose.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>DRIVE IN A SANITISED ZOOMCAR</h3>
        <p>600+ Satisfied Customers</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/7.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>1200+ New Cars For Sale</h3>
        <p>40+ Years In Business</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section>
  

<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Find thr Best CarForYou</h2>
    <p class="w3-opacity"><i>Online Rental Car</i></p>
    <p class="w3-justify">One of our top priorities is to adjust each package we offer to our customer’s exact needs. We offer a variety of options that can enhance your experienc
    e, Always according to your necessities, and help you get the best out of your holidays or your business trip.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>BMW</p>
        <img src="img/19.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>lamborghini</p>
        <img src="img/18.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Mercedes</p>
        <img src="img/20.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>
<!-- Grid -->
<div class="w3-row"><h3><b>Let's Find a Great Deal For Your Rental Car</b></h3>

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    
    <img src="img/22.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Economy is our first name</b></h3>
      <h5>Book Safe and easy, <span class="w3-opacity">Dec 8, 2020</span></h5>
    </div>

    <div class="w3-container">
      <p>One of our top priorities is to adjust each package we offer to our customer’s exact needs. We offer a variety of options that can enhance your experience, Always according to your necessities, and help you get the best out of your holidays or your business trip.</p>
      
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="img/24.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>Best Brands At Lowest Prices!</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>CarFlexi offers you the best possible rates from top international and major local car rental companies across 45,000 rental stations!<br>We at CarFlexi.com go the extra mile to give you the best, carefree car rental experience!</p>
      <div class="w3-row">
       
        
      </div>
    </div>
  </div>

</div>


<div class="w3-col l4">

  <div class="w3-card w3-margin w3-margin-top">
  <img src="img/13.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Leading experts</b></h4>
      <p>EconomyCarRentals has provided millions of customers with the best possible guaranteed price for their Car Rental. We welcome you to become our next satisfied customer.</p>
    </div>
  </div><hr>
  
 
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4> Recently Listed Cars</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="img/25.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Nissan , Lorem ipsum</span><br>
        <span>5,000rs per day</span>
      </li>
      <li class="w3-padding-16">
        <img src="img/28.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Honda</span><br>
        <span>3,ooors per day</span>
      </li> 
      <li class="w3-padding-16">
        <img src="img/26.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Toyota , ytb rvtr</span><br>
        <span>7,000rs per day</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="img/27.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">BMW</span><br>
        <span>15,000rs per day</span>
      </li>  
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>




  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">INAVISH CAR RENTAL</h2>
      <p class="w3-opacity w3-center"><i>Owners of company</i></p><br>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="img/31.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Shivani Gupta</b></p>
            <p class="w3-opacity">Founder</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">See Profile</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/33.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Shivani Kale</b></p>
            <p class="w3-opacity">CEO</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">See Profile</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/32.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Ruchita Keni</b></p>
            <p class="w3-opacity">Manager</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">See Profile</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  

</section>

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