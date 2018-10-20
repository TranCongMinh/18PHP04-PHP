<!DOCTYPE html>
<html>
<head>
	<title>Minh-SS3</title>
</head>
<body>
	<h2>Register</h2>
	<?php
	$errName = '';
	$errPass = '';
	$check = true;
	if (isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$pass = $_POST['password'];
			if ($name == '') {
				$errName = 'Bạn chưa nhập tên';
				$check = false;
			}
			if ($pass == '') {
				$errPass = 'Bạn chưa nhập mật khẩu';
				$check = false;
			}
			if ($check == true) {
				echo "Đăng kí thành công";
			}
		}
	?>

	<form action="#" name="Register" method="POST" enctype="multipart/form-data">
		<?php 
		var_dump($_POST);
		 ?>
		<p>User <input type="text" name="name"></p>
		<span> <?php echo $errName; ?></span>
		<p>Password <input type="password" name="password"></p>
		<span> <?php echo $errName; ?></span>
		<p>Avatar <input type="file" name="Avatar"></p>
		<input type="submit" value="Submit" name="Submit">
	</form>
</body>
</html>