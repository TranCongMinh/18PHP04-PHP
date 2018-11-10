<?php
	class M_comment {
		public $conn;
		function __construct(){
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function getComment($id){
			$sql = "SELECT * FROM comments  INNER JOIN users ON comments.id_user = users.id WHERE id_new = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function new_comment($id_user,$id_new ,$content){
			$sql = "INSERT INTO `comments`(`id_user`, `id_new`, `content`) VALUES ($id_user,$id_new,$content)";
			return  mysqli_query($this->conn, $sql);
		}
	}

 ?>