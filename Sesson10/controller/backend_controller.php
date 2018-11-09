<?php 
	include 'config/config.php';
	include 'model/user.php';
	class BackendController {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'list_User':
							$userModel = new User();
							$listUser =$userModel->getListUser();

							include 'view/list_user.php';
							break;
					break;
				case 'login':
						var_dump("aaa");
						exit();	
						if (isset($_POST['login'])) {
							$username = $_POST['name'];
							$password = $_POST['password'];
							$userModel = new User();
							$checkLogin = $userModel->checkLogin($username, $password);
							if($checkLogin->num_rows) {
								while ($row = mysqli_fetch_array($checkLogin)) {
									$_SESSION['login'] = $username;
								}
								
								header("Location: admin.php?action=list_User");
							} else {
								header("Location: login.php");
							}
						}
						break;
				
				default:
					# code...
					break;
			}
		}
	}
?>