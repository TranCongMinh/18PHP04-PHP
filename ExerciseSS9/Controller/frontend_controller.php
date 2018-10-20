<?php 

	include 'config/connectdb.php';
	include 'model/user.php';
	include 'model/product.php';
	class FrontendController {
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$category_id = isset($_GET['category_id'])?$_GET['category_id']:'';
			$productModel = new Product();
			$listProduct =$productModel->getListProduct($category_id);
			include 'view/frontend/home.php';
		}
	}
?>