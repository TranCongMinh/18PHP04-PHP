<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
</head>
<body>
		<?php
		include('connect.php');
		if(isset($_POST['submit'])){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$sql_id ="SELECT `id` FROM `product`";
			$rs_id=mysqli_query($conn,$sql_id);
			while($row = mysqli_fetch_array($rs_id, MYSQLI_NUM))
	  		 {
	  		 	if ($id == $row[0]) {
	  		 		echo "ID không được trùng nhau";
	  		 	}
	  		 }
			$sql = "INSERT INTO product(
								id,
								name,
								price,
								description
							) VALUES (
								'$id',
								'$name',
								'$price',
								'$description'
							)";

		mysqli_query($conn,$sql);
		}
		?>
		<h1>ADD PRODUCT</h1>
		<form action="#" method="post">
		Product ID: </br> <input type="text" name="id" /> <br />
        Product Name: </br> <input type="text" name="name" /> <br />
        Product Price: </br> <input type="text" name="price" /> <br />
        Description: </br> <input type="text" name="description" /> <br />
        <input type="submit" name="submit" value="Add" />
        </form>  
          

</body>
</html>