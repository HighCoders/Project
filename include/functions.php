<?php require_once("include/db_connect.php");?>
<?php

	function storeUser($username, $email, $password){
		global $connection;
		
		$query = "INSERT INTO users(";
		$query .= "username,email,password)";
		$query .= "VALUES('{$username}', '{$email}','{$password}')";

		$result = mysqli_query($connection, $query);

		if($result){
			$user = "SELECT * FROM users WHERE email = '{$email}'";
			$res = mysqli_query($connection, $user);

			while ($user = mysqli_fetch_assoc($res)){
				return true;
			}
		}else{
				return false;
			}

	}


	function getUserByUsernameAndPassword($username, $password){
		global $connection;
		$query = "SELECT * from users where username = '{$username}' and password = '{$password}'";
	
		$user = mysqli_query($connection, $query);
		
		if($user){
			while ($res = mysqli_fetch_assoc($user)){
				return $res;
			}
		}
		else{
			return false;
		}
	}


	function emailExists($email){
		global $connection;
		$query = "SELECT email from users where email = '{$email}'";

		$result = mysqli_query($connection, $query);

		if(mysqli_num_rows($result) > 0){
			return true;
		}else{
			return false;
		}
	}
    
    //Function to check whether the username exists in the database or not
	function usernameExists($username){
		global $connection;
		$query = "SELECT username from users where username = '{$username}'";

		$result = mysqli_query($connection, $query);

		if(mysqli_num_rows($result) > 0){
			return true;
		}else{
			return false;
		}
	}
	function uploadImage($file_url,$user_id){
		global $connection;
		$query = "UPDATE users SET prof_pic_url = '$file_url' WHERE id='$user_id'";
		$result = mysqli_query($connection, $query);
		if ($result) {
      
			return true;
		}else{
			return false;
		}
	}



   function fetchUserDetails($user_id){
   	$query = "INSERT INTO users(";
		$query = "SELECT id, username, email, languages,address FROM users WHERE id=$user_id";

		$result = mysqli_query($connection, $query);

		if($result){
			$user = "SELECT * FROM users WHERE email = '{$email}'";
			$res = mysqli_query($connection, $user);

			while ($user = mysqli_fetch_assoc($res)){
				return $user;
			}
		}else{
				return false;
			}
   }
//Alert function
   function alert_func($message){
   	echo "<script>alert('$message')	</script>";
   }
 
?>