<?php 
	include('connect.php');
	
	$sql = "SELECT * FROM `user`";
	$user = $_POST['username'];
	$pass = $_POST['password'];
	echo $user;
	$sql_checklogin = "SELECT * FROM `user`";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
	echo $row['user_name'];
?>