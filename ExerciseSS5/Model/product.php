<?php 
	include 'config/connectdb.php';
	class Product extends ConnectDB{
		function InsertProduct($name, $price, $image){
			$sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
			return mysqli_query($this->conn, $sql);
		}
		function getListProduct(){
			$sql = "SELECT * FROM products";
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
		function EditProduct($name, $price ,$id){
			$sql = "UPDATE products SET name = '$name', price = '$price' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($username, $password) {
			$password = md5($password);
			$sql = "SELECT * FROM users WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
	}
?>