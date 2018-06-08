<?php
 
	$host="localhost";
	$user="root";
	$password="";
	$dbName="citynewsalert";

	$conn=mysqli_connect($host, $user, $password, $dbName);
	
	if(!$conn)
	{
		echo "Connection error";
	}
?>