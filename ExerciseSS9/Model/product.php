<?php 
	include 'config/connectdb.php';
	class Product extends ConnectDB{
		function InsertProduct($product_category_id, $name, $price, $imageName){
			$sql = "INSERT INTO products (product_category_id,name,price,image) VALUES ('$product_category_id','$name', '$price', '$imageName')";
			return mysqli_query($this->conn, $sql);
		}
		function getListProduct(){
			$sql = "SELECT products.id, products.name, products.price, products.image, product_categories.name_PC AS category_name  FROM products INNER JOIN product_categories ON 
			products.product_category_id = product_categories.id_PC";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getProduct($id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditProduct($id,$product_category_id,$name, $price,$imageName){
			$sql = "UPDATE products SET product_category_id = '$product_category_id', name = '$name', price = '$price', image = '$imageName' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($username, $password) {
			$password = md5($password);
			$sql = "SELECT * FROM users WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
		function getListCategory($product_category_id = null) {
			$sql = "SELECT * FROM product_categories";
			$select = '';
			$result = mysqli_query($this->conn, $sql);
			while ($row = $result->fetch_assoc()) {
				$id = $row['id_PC'];
				$name = $row['name_PC'];
				$selected = ($id == $product_category_id)?'selected':'';
				$select.="<option value='$id' $selected>$name</option>";
			}
			return $select;
		}
	}
?>