<!DOCTYPE html>
<html>
<head>
	<title>Edit product</title>
</head>
<body>
	<?php
	$id = $_GET['id'];
		echo $id;
		include('connect.php');
		$sql_is = "SELECT * FROM product WHERE id = '$id'";
		$rs=mysqli_query($conn,$sql_is);
		$row = mysqli_fetch_array($rs);
		echo $row[1];
		if(isset($_POST['submit'])){
				$newid = $_POST['id'];
				$newname = $_POST['name'];
				$newprice = $_POST['price'];
				$newdescription = $_POST['description'];
				$sql_update = "UPDATE `product` SET `id`='$newid',`name`= '$newname',`price`='$newprice',`description`= '$newdescription' WHERE id = '$id'";

		mysqli_query($conn,$sql_update);
	}
	?>
	<h1>Edit product</h1>
	<form action="#" method="post">
		Product ID: </br> <input type="text" name="id" value="<?php echo $row[0]; ?>" /> <br />
        Product Name: </br> <input type="text" name="name" value="<?php echo $row[1]; ?>" /> <br />
        Product Price: </br> <input type="text" name="price" value="<?php echo $row[2]; ?>"/> <br />
        Description: </br> <input type="text" name="description"value="<?php echo $row[3]; ?>"/> <br />
     	<input type="submit" name="submit" value="EDIT" />
    </form> 


</body>
</html>