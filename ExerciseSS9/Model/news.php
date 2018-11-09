<?php 
		class News extends ConnectDB{
		// function getListNew($category_id) {
		// 	if ($category_id != ''){
		// 		$sql = "SELECT news.id, news.summary, news.title, news.content, news.category,  news.image , news.created_at , news.updated_at AS category  FROM news INNER JOIN new_categories ON 
		// 		news.category = new_categories.id WHERE category = $category_id";
		// 	} else {
		// 		$sql = "SELECT news.id, news.summary, news.title, news.content, news.category,  news.image , news.created_at , news.updated_at AS category  FROM news INNER JOIN new_categories ON 
		// 		news.category = new_categories.id_NC";
		// 	}
		// 	$result = mysqli_query($this->conn, $sql);
		// 	return $result;
		// }
		public $conn;
		function __construct(){
			$this->connect();
		}
		function getListNew() {
			$sql = "SELECT news.id, news.summary, news.title, news.content, new_categories.name_NC,  news.image , news.created_at , news.updated_at AS category  FROM news INNER JOIN new_categories ON 
			news.category = new_categories.id_NC";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function InsertNews($title, $summary, $content,  $category ,$image){
			$sql = "INSERT INTO news (title, summary, content, category, image ) VALUES ('$title', '$summary', '$content', '$category','$image')";
			return mysqli_query($this->conn, $sql);
		}
		function getListCategoryNew($category = null) {
			$sql = "SELECT * FROM new_categories";
			$select = '';
			$result = mysqli_query($this->conn, $sql);
			while ($row = $result->fetch_assoc()) {
				$id = $row['id_NC'];
				$name = $row['name_NC'];
				$selected = ($id == $category)?'selected':'';
				$select.="<option value='$id' $selected>$name</option>";
			}
			return $select;
		}
		function deleteNews($id){
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function EditProduct($id, $title, $summary, $content, $category, $image){
			$sql = "UPDATE news SET title = '$title', summary = $summary, content = '$content', category = '$category',image = '$image' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
	}
?>