<?php
	/**
	 * 
	 */
	include'Model/model.php';
	class Controller
		{
			function handleRequest(){
				$action = isset($_GET['action'])?$_GET['action']:'home';
				switch ($action) {
					case 'home':
						$model = new Model();
						$home = $model -> getHomeData();
						include'view/home.php';
						break;
					case 'NEW':
						$model = new Model();
						$new = $model -> getNewData();
						include'view/new.php';
						break;
					case 'INFO':
						$model = new Model();
						$info = $model -> getInfoData();
						include'view/info.php';
						break;
					default:
						# code...
						break;
				}

			}
		
		}
	
?>