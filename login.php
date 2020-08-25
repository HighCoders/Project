<?php

//require_once 'source/session.php';
require_once 'include/functions.php';

if(isset($_POST['login_btn'])) {
	//Storing from data to a variable
   $login_username = $_POST['username'];
   $login_password = $_POST['password'];
   
   if (getUserByUsernameAndPassword($login_username,$login_password)) {
   	   header("Location:homepage.html");
   }else{
   	alert_func("Incorrect username or password");
    
   }

}

?>