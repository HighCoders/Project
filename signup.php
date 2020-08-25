<?php

//require_once 'source/session.php';
require_once 'include/functions.php';

if(isset($_POST['signup_btn'])) {	
	//Storing from data to a variable
   $s_uname = $_POST['s_name'];
   $s_email = $_POST['s_email'];
   $s_pass = $_POST['s_pass'];
   
   if (usernameExists($s_uname)) { //If username entered by the user is already in DB then
   	   	echo "Username Already Exists"; //the function inside if will be true as we saw
   }else{ //and if username is not there then
    //we call the storeUser()
        $user = storeUser($s_uname,$s_email,$s_pass);
        if ($user) {
        	alert_func("Rgistration successfull Please Login");

        }else{
        	echo "User registrationfailed please try again";
        } //Lets se this code running 

   }

}

?>