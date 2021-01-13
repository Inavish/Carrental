<?php
session_start();

if(!isset($_SESSION['id'])) {
  $_SESSION['preLocation'] = 'service.php';
header("location:./login.php");

}
?>
<html>
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
          <div class="logo"> <a href="#"><img src="img/logg.png" alt="image"/></a> </div>
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
   
  
<!--navbar-->
<?php include('navbar.php');?>
<!-- /navbar --> 

<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/50.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>FIND THE RIGHT CAR FOR YOU.</h3>
        <p>We have more than a thousand cars for you to choose.</p>
      </div>   
    </div>
  </div>
</div>

<!-- Grid -->
<div class="w3-row"><h3><b>Let's Find a Great Deal For Your Rental Car</b></h3>

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <hr>
    <h1>BMW</h1>
    <hr>
  <section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/26.png" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>BMW , ytb rvtr</h2>
     <p><span>&#36;</span>10,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 7 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="BMW,ytb rvtr.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/34.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>BMW 5</h2>
     <p><span>&#36;</span>15,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 5 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="BMW5.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/35.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>BMW X7</h2>
     <p><span>&#36;</span>18,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 7 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="BMWX7.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/36.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>BMW X3</h2>
     <p><span>&#36;</span>9,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 5 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="BMWX3.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<hr>
    <h1>Mercedes</h1>
    <hr>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/41.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Mercedes-Benz C-Class</h2>
     <p><span>&#36;</span>17,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 7 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="Mercedes-BenzC-Class.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/42.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Mercedes-Benz GLC-Class</h2>
     <p><span>&#36;</span>19,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 5 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="Mercedes-BenzGLC-Class.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/43.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Mercedes-Benz GLS</h2>
     <p><span>&#36;</span>15,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 5 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="Mercedes-BenzGLS.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/44.jpeg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Mercedes-Benz GLC Coupe</h2>
     <p><span>&#36;</span>11,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 7 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="Mercedes-BenzGLCCoupe.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<hr>
    <h1>Audi</h1>
    <hr>
    <section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/37.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Audi A6</h2>
     <p><span>&#36;</span>12,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 6 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="AudiA6.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/38.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Audi RS 7 Sportback</h2>
     <p><span>&#36;</span>11,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 7 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="AudiRS7Sportback.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/39.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Audi Q8</h2>
     <p><span>&#36;</span>14,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 7 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="AudiQ8.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
      <img src="img/40.png" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-5 col-12">
     <h2>Audi A8 L</h2>
     <p><span>&#36;</span>16,000 RS Per Day</p>
     <p><i class='fas fa-user-alt'></i> 5 seat</p>
     <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
     <a href="AudiA8L.php" class="linkk">Book this car>></a>
    </div>
  </div>
  </div>
</section>
  </div>
  <hr>

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

  
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4> Most Popular Car</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="img/39.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Audi Q8</span><br>
        <span>5,000rs per day</span>
      </li>
      <li class="w3-padding-16">
        <img src="img/36.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Honda</span><br>
        <span>3,ooors per day</span>
      </li> 
      <li class="w3-padding-16">
        <img src="img/39.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mercedes-Benz GLC-Class</span><br>
        <span>7,000rs per day</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="img/38.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">BMW</span><br>
        <span>15,000rs per day</span>
      </li>  
    </ul>
  </div>
  

  <div class="w3-card-4 w3-margin w3-white">
  <img src="img/39.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>CAR ON RENT IN MUMBAI</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>On many occasions, working professionals and business persons want to commute to different parts of the city in the same day. Usually, they hire a chauffeur driven car and pay extra for the waiting charges. This option, while popular, is also more expensive. It is more economical to opt for a self-drive car rental in Mumbai. You can spend any amount of time at a meeting without having to worry about the waiting charges, and use the car to explore Mumbai after work at your leisure. Zoomcar also provides Mumbai airport taxi service, using which you can pick up one of our cars right at the airport when you land. We have a variety of self drive cars in our fleet including luxury brands which makes it easier to book luxury self drive cars on rent in Mumbai.</p>
      <div class="w3-row">
       
        
      </div>
    </div>
  </div>


  <div class="w3-card-4 w3-margin w3-white">
  <img src="img/5.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>The Revv Advantage!</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>To have your own self drive cars in Mumbai has become necessary. And Revv makes it convenient and affordable. Along with a wide fleet of cars, we offer you unlimited kilometres to have your free travel in the city. Also, travelling across the city and state borders won’t be a fix, as all our cars have an All India Tourist Permit which will make your trip hassle-free. So, just choose your route and Happy Revving!</p>
      <div class="w3-row">
       
        
      </div>
    </div>
  </div>


  <div class="w3-card-4 w3-margin w3-white">
  <img src="img/41.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>ABOUT INAVISH CAR RENTAL!</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>No more worries about petrol mileage, insurance, and car breakdowns! Zoomcar has enabled driving convenience for travellers around the country and is fast expanding its reach to cities including Ahmedabad, Bangalore, Chandigarh, Chennai, Coimbatore, Delhi-NCR, Hyderabad, Jaipur, Kochi, Kolkata, Ludhiana, Mangalore, Mumbai, Mysore, Pune, Siliguri, Vizag, Nagpur, Udaipur, Vijayawada, Surat, Lucknow and Guwahati.
Self drive cars from Zoomcar have given customers more control, privacy, and freedom. Book a self drive car in any city you visit with the Zoomcar app on your phone and feel at home wherever you go.</p>
      <div class="w3-row">
       
        
      </div>
    </div>
  </div>


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

<hr>


<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
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


  </body>
  </html> 