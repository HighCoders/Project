<?php

//require_once 'source/session.php';
require_once 'include/functions.php'; 

if(isset($_POST['login_btn'])) { 
	//Storing from data to a variable

   $login_username =$_POST['u_name'];
   $login_password =$_POST['u_pass'];
   //Now let's see what this function does
   //OKay?
   if ($login_username == "") {
     header("Location: login.php?username=empty");
   }
   if ($login_password == "") {
     header("Location: login.php?password=empty");
   }
   if (getUserByUsernameAndPassword($login_username,$login_password)) {
   	   header("Location:homepage.php");
         session_start();
         $_SESSION['u_name']=$login_username;
         $_SESSION['u_id']= getUserId($_SESSION['u_name'],$login_password);
   }else{
   	header("Location: login.php?credentials=incorrect");
    }

}

?>