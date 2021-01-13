<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
     <link rel="stylesheet" type="text/css" href="shiv.css">
</head>
<body style="background-image: url('img/51.jpg');">
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label><b>Name</b></label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label><b>User Name</b></label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label><b>Password</b></label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label><b>Re Password</b></label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button class="linkk" type="submit">Sign Up</button>
          <a href="loginindex.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>