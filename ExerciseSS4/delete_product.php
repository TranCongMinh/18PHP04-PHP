<?php
	$id = $_GET['id'];
	include('connect.php');
	$sql = "DELETE FROM `product` WHERE `id` =  '$id'";
	mysqli_query($conn,$sql);
	header("Location: list_product.php"); 
	echo $id;
?>