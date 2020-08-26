<?php require_once("db_connect.php");?>  
<?php
  
		$query = "SELECT id FROM users WHERE username='veekalp'";

		$user_id = mysqli_query($connection, $query);
		$user_id = msqli_fetch_row($user_id);
		echo $user_id;

?>