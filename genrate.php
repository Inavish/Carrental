
<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        $_SESSION['preLocation'] = 'genrate.php';
      header("location:./login.php");
      
      }
    $con = mysqli_connect('localhost','root','','inavish');
   
    $username = $_SESSION['user_name'];

		$query = " SELECT * FROM `test` WHERE `username` = '$username'";
		$run = mysqli_query($con,$query);
			//mysqli_query function performs a query against a database

		if(mysqli_num_rows($run) > 0) {
            //'mysqli_num_rows' this function is used to count number of rows got from query.
            
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
   

    <!--navbar-->
    <?php include('navbar.php');?>
<!-- /navbar --> 

		        <table class="table">
					<tr>
						<th>Sr.no.</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
                        <th>Carname</th>
						<th>From date</th>
                        <th>To date</th>
						<!-- <th>Licence</th> -->
                        <th>Comments</th>
						<th></th>
					</tr>

					<?php
						$count = 0;
						while($data = mysqli_fetch_assoc($run)){
							$count++;
					?>
					<tr>
						<td><?php echo $count ?> </td>
						<td><?php echo $data['user'] ?> </td>
						<td><?php echo $data['mobile'] ?> </td>
						<td><?php echo $data['email'] ?> </td>
                        <td><?php echo $data['carname'] ?> </td>
						<td><?php echo $data['fromdate'] ?> </td>
                        <td><?php echo $data['todate'] ?> </td>     
                        <td><?php echo $data['comments'] ?> </td>
                        <td><img src="./dataimg/<?php echo $data['license'] ?>" alt="no image" style="width:100px;height:100px;"></td>
						</tr>
				
				
			<?php
				}
			?>
			</table>
			<?php



		}
		else {
			echo "You did not booked any car yet";
		}




?>
</body>
</html>