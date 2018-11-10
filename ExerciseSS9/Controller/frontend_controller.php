<?php 

	
	include'config/connectdb.php';
    include 'Model/m_news.php';
    include 'Model/m_comment.php';
    include 'Model/user.php';
	class FrontendController {
		function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'phantrang';
		switch ($action) {
			case 'home':
			$NewModel = new M_news();
			$listAll = $NewModel->getAll();

			include 'view/frontend/home.php';
			break;
			case 'phantrang':
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				}else $page = 1;
				$NewModel = new M_news();
				$NewModel2 = new M_news();
				$phantrang = $NewModel->getPhanTrang($page);
				$tongsotrang = $NewModel2->getTotalNew();
				include 'view/frontend/phantrang.php';
				break;
			case 'detail':
			$id = $_GET['id'];
			$newModel = new M_news();
			$commentModel = new M_comment();
			$newDetail = $newModel->getDetailById($id);
			$newComment = $commentModel->getComment($id);
			include 'view/frontend/chitiet.php';
			break;
			case 'news_comment':
				// if (isset($_SESSION['userlogin'])) {
						$user_id = 14;
						$id_new = $_GET['id'];
						$content = $_POST['new_content'];
						$commentModel = new M_comment();
						$commentModel->new_comment($user_id,$id_new,$content);
						// header("Location: index.php?action=detail&id=$id_new");
					// } else {
					// 	header("Location: index.php?action=dangnhap");
					// }
				break;
			case 'userlogin':
						if (isset($_POST['userlogin'])) {
							$username = $_POST['name'];
							$password = $_POST['password'];
							$userModel = new User();
							$checkLogin = $userModel->checkLogin($username, $password);
							if($checkLogin->num_rows) {
								while ($row = mysqli_fetch_array($checkLogin)) {
									$_SESSION['user_id'] = $row['id'];
									$_SESSION['userlogin'] = $username;
									$_SESSION['avatar'] = $row['avatar'];
								}

								header("Location: index.php?action=phantrang");
							} else {
								
								header("Location: dangnhap.php");
							}
						}
						break;
			case 'userlogout':

							unset($_SESSION['userlogin']);
							header("Location: dangnhap.php");
							break;
			default:
				# code...
				break;
		}
		}
		
	}
?>