<!DOCTYPE html>
<html>
<head>
	<title>Bai 1</title>
	<style type="text/css">
 	.err{
 		color: red;
 	}
	</style>
</head>
<body>
	<h1>Sign-in</h1>
	<?php
		$check = true;
		$errName = '';
		$errEmail = '';
		$errPass = '';
		$errRepass = '';
		$errGender = '';
		$errFile = '';
		if (isset($_POST['Submit'])) {
			$Name = $_POST['name'];
			$Email = $_POST['email'];
			$Pass = $_POST['password'];
			$Repass = $_POST['repassword'];
   			$errFile = '';
				if ($Name == '') {
					$errName = 'Bạn chưa nhập tên';
					$check = false;
				}
				if (check_email($Email) == FALSE) {
					$errEmail = 'Nhập đúng định dạng email';
					$check = false;
				}
				if ($Pass == '') {
					$errPass = 'Bạn chưa nhập mật khẩu';
					$check = false;
				}
				if ($Repass == '') {
					$errRepass = 'Bạn chưa nhập mật khẩu';
					$check = false;
				}
				if ($Pass != $Repass) {
					$errRepass = 'Mật khẩu nhập phải giống nhau';
					$check = false;
				}
				if (empty($_POST['gender'])) {
					$errGender = 'Chưa chọn giới tính';
					$check = false;
				}
				if (isset($_FILES['avatar']))
			        {
			            // Nếu file upload không bị lỗi,
			            // Tức là thuộc tính error > 0
			            if ($_FILES['avatar']['error'] > 0)
			            {
			                $errFile = 'File Upload Bị Lỗi';
			            }
			            else{
			                // Upload file
			                move_uploaded_file($_FILES['avatar']['tmp_name'], './img/'.$_FILES['avatar']['name']);
			            }
			        	}
				        else{
				            $errFile = 'Bạn chưa chọn ảnh upload';
				        }
				if ($check) {
					echo "Infomation"."</br>";
					echo "Your name : ".$Name."</br>";
					echo "Your email : ".$Email."</br>";
					echo "Gender : ".$_POST['gender']."</br>";
					echo "Country : ".$_POST['country']."</br>";
					$hinhanh = $_FILES['avatar']['name'];
					echo "<b>Avatar : </b> <img src="."img/".$hinhanh." />";
				}
		}
		function check_email($Email) {
    			return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email)) ? FALSE : TRUE;
		}
	  ?>
	<form action="#" name="Sign-in" method="POST" enctype="multipart/form-data">
		<p>User <input type="text" name="name"></p>
		<span class="err"> <?php echo $errName; ?></span>
		<p>Email <input type="text" name="email"></p>
		<span class="err"> <?php echo $errEmail; ?></span>
		<p>Password <input type="password" name="password"></p>
		<span class="err"> <?php echo $errPass; ?></span>
		<p>Confirm Password <input type="password" name="repassword"></p>
		<span class="err"> <?php echo $errRepass; ?></span>
		<p>Gender</p>
		<p>Male<input type="radio" name="gender" value="Male"></p>
		<p>Female<input type="radio" name="gender" value="Female"></p>
		<p>Other<input type="radio" name="gender" value="Other"></p>
		<span class="err"> <?php echo $errGender; ?></span>
		<p> Country
		<select name="country">
		  <option value="American">Mẽo</option>
		  <option value="Japan">Nhựt</option>
		  <option value="Korea">Hèn Quéc</option>
		  <option value="China">Tàu</option>
		</select></p>
		<p>Info <textarea name="comment"></textarea></p>
		<p>Avatar <input type="file" name="avatar" id="avatar"></p>
		<span class="err"> <?php echo $errFile; ?></span>
		<input type="Submit" name="Submit" value="Sign">
	</form>
	
</body>
</html>