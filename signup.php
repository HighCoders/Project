<?php

//require_once 'source/session.php';
require_once 'include/functions.php';

if(isset($_POST['signup_btn'])) {	
	//Storing from data to a variable
   $s_uname = $_POST['s_name'];
   $s_email = $_POST['s_email'];
   $s_pass = $_POST['s_pass'];
   
   if (usernameExists($s_uname)) {
   	   	echo "Username Already Exists";
   }else{
        $user = storeUser($s_uname,$s_email,$s_pass);
        if ($user) {
        	alert_func("Rgistration successfull Please Login");

        }else{
        	echo "User registrationfailed please try again";
        }

   }

}

?>