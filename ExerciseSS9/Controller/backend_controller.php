<?php 
	

	class Controller {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
						case 'add_user':
							include_once 'Model/user.php';
							if(!isset($_SESSION['login'])){
								header("Location: login.php");
							}

							if(isset($_POST['add_user'])) {
								$name     = $_POST['name'];
								$username = $_POST['username'];
								$password = $_POST['password'];
								$password = md5($password);
								$avatar = $_POST['avatar'];
								$userModel = new User();
								$userModel->InsertUser($name, $username, $password,$avatar);
								header("Location: admin.php?action=list_user");
							}
							include 'view/backend/add_user.php';
							break;
				case 'list_user':
						include_once 'Model/user.php';
							if(!isset($_SESSION['login'])){
								header("Location: login.php");
							}
							$userModel = new User();
							$listUser =$userModel->getListUser();

							include 'view/backend/list_user.php';
							break;
				case 'delete_user':
						include 'Model/user.php';
							if(!isset($_SESSION['login'])){
								header("Location: login.php");
							}
							$id = $_GET['id'];
							$userModel = new User();
							$userModel->deleteUser($id);
							header("Location: admin.php?action=list_user");
							break;

						case 'edit_user':
				include_once 'Model/user.php';
						if(!isset($_SESSION['login'])){
							header("Location: login.php");
						}
						$id = $_GET['id'];
						$userModel = new User();
						$userEdit = $userModel->getUserInfo($id);
						while ($row = $userEdit->fetch_assoc()) {
							$nameEdit = $row['name'];
							$usernameEdit = $row['username'];
						}
						if(isset($_POST['edit_user'])) {
							$name     = $_POST['name'];
							$username = $_POST['username'];
							$userModel = new User();
							$userModel->EditUser($id, $name, $username);
							header("Location: admin.php?action=list_user");
						}
						include 'view/backend/edit_user.php';
						break;		
				case 'add_product':
						include_once 'Model/product.php';
						if(!isset($_SESSION['login'])){
							header("Location: login.php");
						}
						$productModel = new Product();
						$category = $productModel->getListCategory();
						if(isset($_POST['add_product'])) {
							$name                = $_POST['name'];
							$price               = $_POST['price'];
							$product_category_id = $_POST['product_category_id'];
							$image = $_FILES['image'];
							$path = 'dist/img2/';
							$imageName = uniqid().$image['name'];
							move_uploaded_file($image['tmp_name'], $path.$imageName);
							$productModel = new Product();
							$productModel->InsertProduct($product_category_id,$name,$price, $imageName);
							header("Location: admin.php?action=list_product");
						}
						include 'view/backend/add_product.php';
						break;
				case 'list_product':
						include_once 'Model/product.php';
					
						if(!isset($_SESSION['login'])){
							header("Location: login.php");
						}
						$productModel = new Product();
						$listProduct = $productModel->getListProduct();
						include 'view/backend/list_product.php';
						break;
				case 'edit_product':
						include_once 'Model/product.php';
						if(!isset($_SESSION['login'])){
							header("Location: login.php");
						}
						$id = $_GET['id'];
						$productModel = new Product();
						$productEdit = $productModel->getProduct($id);
						while ($row = $productEdit->fetch_assoc()) {
							$nameEdit 				= $row['name'];
							$priceEdit				= $row['price'];
							$imageEdit 				= $row['image'];
							$product_category_id 	= $row['product_category_id'];

						}
						$productModel = new Product();
						$category = $productModel->getListCategory($product_category_id);
						if(isset($_POST['edit_product'])) {
							$name   					= $_POST['name'];
							$price  					= $_POST['price'];
							$product_category_id     	= $_POST['product_category_id'];
							$imageName = $imageEdit;
							if(!$_FILES['image']['error']){
								$image = $_FILES['image'];
								$path = 'dist/img2/';
								$imageName = uniqid().$image['name'];
								move_uploaded_file($image['tmp_name'], $path.$imageName);
								unlink('dist/img2/'.$imageEdit);
							}
							
							$productModel = new Product();
							$productModel->EditProduct($id,$product_category_id, $name, $price, $imageName);
							header("Location: admin.php?action=list_product");
						}
						include 'view/backend/edit_product.php';
						break;
				case 'delete_product':
						include 'Model/product.php';
						if(!isset($_SESSION['login'])){
							header("Location: login.php");
						}
						$id = $_GET['id'];
						$productModel = new Product();
						$productModel->deleteProduct($id);
						header("Location: admin.php?action=list_product");
						break;
				case 'list_news':
						include 'Model/news.php';
						if(!isset($_SESSION['login'])){
							header("Location: login.php");
						}
						$newsModel = new News();
						$listNews = $newsModel->getListNew();
						include 'view/backend/list_news.php';
						break;
				case 'add_news':
						include 'Model/news.php';
						if(!isset($_SESSION['login'])){
							header("Location: login.php");
						}
						$newsModel = new News();
						$category  = $newsModel->getListCategoryNew();
						if(isset($_POST['add_news'])) {
						$title                = $_POST['title'];
						$summary               = $_POST['summary'];
						$content               = $_POST['content'];
						$category = $_POST['category'];
						$image = $_FILES['image'];
						$path = 'dist/img2/';
						$imageName = uniqid().$image['name'];
						move_uploaded_file($image['tmp_name'], $path.$imageName);
						$newsModel = new News();
						$newsModel->InsertNews($title, $summary, $content,  $category ,$imageName);
						header("Location: admin.php?action=list_news");
						}
						include 'view/backend/add_news.php';
						break;
				case 'delete_news':
					include 'Model/news.php';
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$newsModel = new News();
					$newsModel->deleteNews($id);
					//view du lieu
					header("Location: admin.php?action=list_news");
					break;
				case 'login':
						include_once 'Model/user.php';	
						if (isset($_POST['login'])) {
							$username = $_POST['username'];
							$password = $_POST['password'];
							$userModel = new User();
							$checkLogin = $userModel->checkLogin($username, $password);
							if($checkLogin->num_rows) {
								while ($row = mysqli_fetch_array($checkLogin)) {
									$_SESSION['login'] = $username;
									$_SESSION['avatar'] = $row['avatar'];
								}
								
								header("Location: admin.php?action=list_user");
							} else {
								header("Location: login.php");
							}
						}
						break;
				case 'logout':
						include_once 'Model/user.php';
							unset($_SESSION['login']);
							header("Location: login.php");
							break;
						default:
							# code...
						break;
			}

		}
	}
?>