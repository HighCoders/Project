<?php
	/**
	*Database config variables
	*/
	//If we use hostinger or some hosting service then host name will change e.g. wwww.hostingerr/sdfsdfsdfsomething something
   define('DB_HOST','localhost'); //Defining server's hostname username password and databasename
   define('DB_USER','root');       //Yes I had created it whrn I was in ATTC :) Luckily I had a backup
   define('DB_PASSWORD','');
   define('DB_NAME','project');
    //Later when we complete the project and host it we have to make changes here
    //FOllowing?
   //No dont save I just wanted to explain the backend code:)
     //Sorry that you have to delete the comments later :)
   //Okay lets connect to data base now
   //We defined the host variables above
   //Now we take that data and pass it to msqliconnect
  // function // THis function will connect it to the database
   //Connecting like this makes the website vulnerable there is
   //a more secure method of connecting using classes and objects but for now yesari naii garum
   //That method is PDO method PHP  Data Object Method->alik pachi garum yesari lo?
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
   //The function below returns a bool value and error no if database connection fails
	//if true 
	if(mysqli_connect_errno()){
		die("Database connnection failed " . "(" .
			mysqli_connect_error() . " - " . mysqli_connect_errno() . ")"//run this statement
				);
	}else{//else
		echo "Connected to Database";//this
	}
	//If you want more information about the functions above ill send you some reference 
	//Now, did you understand this script?
	//Kunaii line ma doubt cha?//Okay lets move forward then

?>