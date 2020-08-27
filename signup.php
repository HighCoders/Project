
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SIGNUP</title>
	<script src="https://kit.fontawesome.com/a56db9830e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="login-box">
		<h1>Sign Up</h1>
 		<form action="signup_proc.php" method="POST">
 			<div class="textbox">
 				<i class="fas fa-user"></i>
 				<input type="text" placeholder="Username" required="required" name="s_name">
 				

 			</div>
              <?php
             $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
             if(strpos($fullURL,"uname=ex")){
             echo "<p class='error'>*Username already exists<p>";
             }
             
             ?>
 			<div class="textbox">
 				<i class="fas fa-envelope"></i>
 				<input type="email" placeholder="E-mail" required="required" name="s_email">
 			</div>
 			<div class="textbox">
 				<i class="fas fa-lock"></i>
 				<input type="password" placeholder="Password" required="required" name="s_pass">
 			</div>
 			<div class="textbox">
 				<i class="fas fa-lock"></i>
 				<input type="password" placeholder="Confirm Password" required="required" name="s_c_pass">
 			</div>
 			<input class="btn" type="submit" value="Signup" name="signup_btn">
 			 <?php
     	     $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     	     if(strpos($fullURL,"pw=nm")){
     	 	   echo "<p class='error'>*Passwords do not match<p>";
     	     } ?>
             
 			<p align="center">Already Signed Up?<a href="login.php"> Login</a><p>
 	       
     	</form>
     </div>
</body>
</html>