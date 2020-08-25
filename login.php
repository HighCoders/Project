<?php

//require_once 'source/session.php';
require_once 'include/functions.php'; ///Here we have included the functions.php file 

if(isset($_POST['login_btn'])) { //Here were givingg a condition if user clicks the login button well run the code below 
	//Storing from data to a variable

   $login_username = $_POST['username']; //We had used POST method so the form data will be inside POST array dekhdaii chau??
   $login_password = $_POST['password']; //we take the form data from the POST array and assign it to variables
   //Now let's see what this function does
   //OKay?
   if (getUserByUsernameAndPassword($login_username,$login_password)) {
   	   header("Location:homepage.html");
   }else{
   	alert_func("Incorrect username or password");
    
   }

}

?>