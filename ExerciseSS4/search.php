<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<h1>SEARCH</h1>
	<form action="#" method="post">
	Keywork: </br> <input type="text" name="keywork" /> <br />
	<input type="submit" name="submit" value="SEARCH" />
    </form> 
		<?php
	include('connect.php');
	if(isset($_POST['submit'])){
	$keywork = $_POST['keywork'];
	$sql_s = "SELECT * FROM product
				WHERE name LIKE '%$keywork%' or description LIKE '%$keywork%'";
	$rs=mysqli_query($conn,$sql_s);	
	if ($keywork == '') {
		echo "Mời bạn nhập từ khóa "; 
		}else
			while($row = mysqli_fetch_array($rs, MYSQLI_NUM))
	  		 {
	  		 echo "--ID :" .$row[0] ."</br> Name product :".$row[1] ."</br> Price product :".$row[2]."$"."</br> Description product :".$row[3];
	}
	}
	?>
</body>
</html>