<?php
session_start();
$con = mysqli_connect('localhost','root','','inavish');
if($con){
    echo "connection successful";
}
else{
    echo "connection failed";
}

// print_r($_SESSION);


mysqli_select_db($con, 'inavish');
$user = $_POST['user'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$carname = $_POST['carname'];
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
// $license = $_FILES['license']['name'];
$comments = $_POST['comments'];
$image_name = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];
$username = $_SESSION['user_name'];

	move_uploaded_file($temp_name, './dataimg/'.$image_name);
// $temp_license = file_get_contents($_FILES['license']['temp_license']);

// $query = " insert into bookinginfo (user, mobile, email, carname, fromdate, todate, license,comments)
// values ('$user','$mobile','$email','$carname','$fromdate','$todate','$temp_license','$comments')";
// $query = "INSERT INTO `test`(`user`, `mobile`, `email`, `carname`, `fromdate`, `todate`, `license`,`comments`,`username`) VALUES ('$user','$mobile','$email','$carname','$fromdate','$todate','$image_name','$comments','$username');";
$query = "INSERT INTO `test`(`id`,`user`, `mobile`, `email`, `carname`,`fromdate`, `todate`, `license`, `comments`, `username`) VALUES ('','$user','$mobile','$email','$carname','$fromdate','$todate','$image_name','$comments','$username');";

print_r($query);

// echo "query";
mysqli_query($con,$query);

header("Location:index.php");
?>