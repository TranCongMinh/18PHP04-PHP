<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php
		include('connect.php');
		if(isset($_POST['submit'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$sql = "INSERT INTO user(
								username,
								password
							) VALUES (
								'$user',
								'$pass')";
		mysqli_query($conn,$sql);
		}
	?>
<form action="#" method="post">
          Tên đăng nhập: </br> <input type="text" name="username" placeholder="Nhập username" /> <br />
          Mật khẩu:</br> <input type="password" name="password" placeholder="Nhập mật khẩu" /> <br />
          <input type="submit" name="submit" value="Đăng nhập" />
  </form>
</body>
</html>
  