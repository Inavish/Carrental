<?php
session_start();

if(!isset($_SESSION['id'])) {
  $_SESSION['preLocation'] = 'BMWX7.php';
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
    <!--navbar-->
    <?php include('navbar.php');?>
<!-- /navbar --> 

<section  class="my-5">
  <div style=" margin: auto;
  width: 55%;
  
  padding: 10px;" class="container-fluid">
  <div class="row">
    <div style="width: 50%;">
    <img src="img/35.jpg" class="img-fluid aboutimg">

</div>
<div class="col-lg-6 col-md-5 col-12">
 <h2>BMW X7</h2>
 <p><span>&#36;</span>18,000 RS Per Day</p>
 <p><i class='fas fa-user-alt'></i> 7 seat</p>
 <p><i class='fas fa-car' style='font-size:24px'></i>Petrol</p>
 <a href="#" class="linkk">Available</a>
</div>
</div>
</div>
</section>

    <section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Book This Car</h2>
  </div>
  <div class="w-50 m-auto">
  <form action="bookdatabase.php" method="post" enctype="multipart/form-data">  
          <div class="form-group">
            <lable>Name</lable>
              <input type="text" name="user" autocomplete="off" class="form-control">

          </div>   
          <div class="form-group">
            <lable>Mobile</lable>
              <input type="text" name="mobile" autocomplete="off" class="form-control">

          </div>  
          <div class="form-group">
            <lable>Email Id</lable>
              <input type="text" name="email" autocomplete="off" class="form-control">

          </div>   
          <div class="form-group">
            <lable>Car Name</lable>
              <input type="text" name="carname" autocomplete="off" class="form-control">

          </div>  
          <div class="form-group">
            <lable>From Date</lable>
              <input type="text" name="fromdate" autocomplete="off" class="form-control">

          </div>  
          <div class="form-group">
            <lable>To date</lable>
              <input type="text" name="todate" autocomplete="off" class="form-control">

          </div> 

          <div class="form-group">
              <label >Upload your driving license:</label>
              <input type="file" name="image" autocomplete="off" class="form-control">
          </div> 

          <div class="form-group">
            <lable>Comments</lable>

             <textarea class="form-control" name="comments">
             </textarea><br>
             <button type="submit" class="btn btn-success">Submit</button>
          </div>   
       
       </form>  
        
      
  
  
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

</body>
</html>