<?php 

	
	include'config/connectdb.php';
    include 'Model/m_news.php';
    
	class FrontendController {
		function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'home';
		switch ($action) {
			case 'home':
			$NewModel = new M_news();
			$listAll = $NewModel->getAll();
			include 'view/frontend/home.php';
			break;
			case 'detail':
			$id = $_GET['id'];
			$newModel = new M_news();
			$newDetail = $newModel->getDetailById($id);
			include 'view/frontend/chitiet.php';
			break;
			
			default:
				# code...
				break;
		}
		}
		
	}
?>