
<?php
	
	$server_username = "root";
	$server_password = "";
	$server_host = "localhost";
	$database = '18php04-test';
	 
	$conn = mysqli_connect($server_host,$server_username,$server_password,$database); 
	if (mysqli_connect_error()) {
    die("Connection failed: ");
	} 
	echo "";
	mysqli_query($conn,"SET NAMES 'UTF8'");
?>
