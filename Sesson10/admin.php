<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();
	include 'controller/backend_controller.php';
?>	
	<span> <?php echo isset($_SESSION['login'])?$_SESSION['login']:header('Location: login.php');?>HI.</span>
	<h1>Quản lí ADMIN</h1>
	<a href="admin.php?action=add_user"> ADD USER</a>
	<a href="admin.php?action=list_user"> LIST USER</a>
	<a href="admin.php?action=add_product"> ADD PRODUCT</a>
	<a href="admin.php?action=list_product"> LIST PRODUCT</a>
	<a href="admin.php?action=add_news"> ADD NEWS</a>
	<a href="admin.php?action=list_news"> LIST NEWS</a>

		
</body>
</html>