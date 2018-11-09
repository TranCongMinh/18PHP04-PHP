<?php 
	class User extends ConnectDB{
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function insertUser($username , $password , $avartar){
			$sql = "INSERT INTO `user`(`username`, `password`, `avatar`) VALUES ('$user','$password','$avartar')";
			return mysqli_query($this->conn, $sql);
		}
		function updateUser($id , $username , $password , $avartar){
			$sql = "UPDATE `user` SET `username`='$username',`password`='$password',`avatar`='$avartar' WHERE `id` = '$id'";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getListUser() {
			$sql = "SELECT * FROM users" ;
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
?>