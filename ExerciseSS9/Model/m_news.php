<?php 
	
	class M_news {
		public $conn;
		function __construct(){
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function getAll(){
			$sql = "SELECT `id`, `title`, `summary`, `content`, `category`, `image`, `created_at`, `updated_at` , new_categories.name_NC  FROM news INNER JOIN new_categories ON news.category = new_categories.id_NC";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getDetailById($id){
			$sql = "SELECT * FROM news WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result; 
		}


	}
?>