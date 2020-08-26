<?php
// Starting session
session_start();
 
// Removing session data
if(isset($_SESSION["u_name"])){
    unset($_SESSION["u_name"]);
    header("Location: login.php");
}
?>