
<?php

    $username="admin";//change username 
	$password="1234"; //change password
	$host="localhost";
	$db_name="register"; //change databasename
	

	$connect=mysqli_connect($host,$username,$password,$db_name);
	

	if(!$connect)
	{
		echo json_encode("Connection Failed");
	}
	

	?>