<!DOCTYPE html>
<html>
<head>
	<title>List user</title>
</head>
<body>
	<h1>List user</h1>
	<?php
		include('connect.php');
		$sql_is = "SELECT `username` FROM `user`";
		$rs=mysqli_query($conn,$sql_is);

		// Numeric array
		// $row=mysqli_fetch_array($rs,MYSQLI_NUM);
		// echo $row[0];
		while($row = mysqli_fetch_array($rs, MYSQLI_NUM))
  		 {
      		echo $row[0]; 
      		echo "";
      		echo "</br>";
   		}

		
		
		
		
	 ?>

</body>
</html>