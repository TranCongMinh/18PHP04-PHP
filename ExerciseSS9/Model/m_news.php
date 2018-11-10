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
		function getPhanTrang($page){
			$sotrangchia = 2;
			$total = mysqli_num_rows($this->getALL());
			$from = ($page-1)*$sotrangchia;
			$sql = "SELECT `id`, `title`, `summary`, `content`, `category`, `image`, `created_at`, `updated_at` , new_categories.name_NC  FROM news INNER JOIN new_categories ON news.category = new_categories.id_NC LIMIT $from,$sotrangchia";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getTotalNew(){
			$sotrangchia = 2;
			$total = mysqli_num_rows($this->getALL());
			$currentPage = ceil($total/$sotrangchia);
			return $currentPage;
		}


	}
?>