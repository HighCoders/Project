<!doctype html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>OUR FIRST PROJECT</title>
	<meta  name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<nav>
  		<input type="checkbox" id="check">
  		<label for="check" class="checkbtn">
  			<i class="fas fa-bars"></i>
  		</label>
  		<label class="logo">Thopdabook</label>
  	 	<ul>
  	  		<li><a class="active" href="#">Home</a></li>
  	  		<li><a href="#">Gallery</a></li>
  	  		<li><a href="logout.php">Logout</a></li>
        </form>
     	</ul>
  	</nav>

    <h1>WELCOME <?php session_start(); echo $_SESSION['u_name'];?><h2>
</body>
</html>