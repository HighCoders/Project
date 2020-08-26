<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<script src="https://kit.fontawesome.com/a56db9830e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="script" type="script" href="script/script.js">
</head>
<body>
	<?php
	session_start();
      //If user is already logged in then redirect the user to homepage
	if (isset($_SESSION['u_name'])){
		header("Location: homepage.php");
	}

	?>
	<div class="login-box">
		<h1> Login </h1>
 		<form action="login_proc.php" method="POST">
 			<div class="textbox">
 				<i class="fas fa-user"></i>
 				<input type="text" placeholder="Username" name="u_name" value="" id="u">
 						<?php
     	 $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     	 if(strpos($fullURL,"username=empty")){
     	 	echo "<p class='error'>*Please enter username<p>";
     	 }
         ?>
     
 			</div>
 			<div class="textbox">
 				<i class="fas fa-lock"></i>
 				<input type="password" placeholder="Password" name="u_pass" value="" id="p">
 								<?php
     	 $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     	 if(strpos($fullURL,"paswword=empty")){
     	 	echo "<p class='error'>*Please enter password<p>";
     	 }
         ?>
 			</div>
 			
 			<input class="btn" type="submit" name="login_btn" value="Login">
 			<?php
     	 $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     	 if(strpos($fullURL,"credentials=incorrect")){
     	 	echo "<p class='error'>Incorrect credentials ! Please try again<p>";
     	 }
         ?>
         <p align="center">Not Registered?<a href="signup.php">Sign Up </a><p>
     	</form>
     	
	</div>
<script>
</script>
 </body>
</html>