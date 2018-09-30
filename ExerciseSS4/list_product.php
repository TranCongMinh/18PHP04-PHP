<!DOCTYPE html>
<html>
<head>
	<title>List Product</title>
</head>
<body>
		<h1>List user</h1>
		<a href='search.php'>SEARCH</a> <br>
		<a href='add_product.php'>ADD PRODUCT</a>
		<br>
		<?php
			include('connect.php');
			$sql_is = "SELECT * FROM product";
			$rs=mysqli_query($conn,$sql_is);
			while($row = mysqli_fetch_array($rs, MYSQLI_NUM))
	  		 {
	  		 	$id = $row[0];
	      		echo "--ID :" .$row[0] ."</br> Name product :".$row[1] ."</br> Price product :".$row[2]."$"."</br> Description product :".$row[3]; 
	      		echo " <a href='delete_product.php?id=$id'>DELETE</a>";
	      		echo " <a href='edit_product.php?id=$id'>EDIT</a>";
	      		echo "";
	      		echo "</br>";
	   		}
		 ?>
		 

</body>
</html>