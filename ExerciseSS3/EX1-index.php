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
		$errConutry = '';
		$checkMale = $checkFemale = $checkOther = '';
		$checkJP = $checkKR = $checkCN = '';
		include('login.php');
			if (isset($_POST['Submit'])) {
			$Name = $_POST['name'];
			$Email = $_POST['email'];
			$Pass = $_POST['password'];
			$Repass = $_POST['repassword'];
			$Gender = $_POST['gender'];
			$Country = $_POST['country'];
			$Info = $_POST['info'];
   			$errFile = '';
   			$type_file = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
   			$size_file = $_FILES['avatar']['size'];
   			$type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
   			$hinhanh = $_FILES['avatar']['name'];
   			$src = "img/".$hinhanh;
   			
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
				} else {
						if ($Gender == 'Male') {
							$checkMale = "checked";
						}
						if ($Gender == 'Female') {
							$checkFemale = "checked";
						}
						if ($Gender == 'Other') {
							$checkOther = "checked";
						}
				}
				if ($Country == '') {
					$check = false;
					$errConutry = 'Please choose your city!';
				} else {
					if ($Country == 'Japan') {
						$checkJP = "selected";
					}
					if ($Country == 'Korea') {
						$checkKR = "selected";
					}
					if ($Country == 'China') {
						$checkCN = "selected";
					}
				}
				

				if (isset($_FILES['avatar']))
			        {
			            // Nếu file upload không bị lỗi,
			            // Tức là thuộc tính error > 0
			            if ($size_file > 5000000) {
       						 $errFile = "Invalid size (5MB)";
       						
    					}
    					if (!in_array(strtolower($type_file), $type_fileAllow)) {
        					$errFile = "Does not support files (Support jpg jpeg gjf png)";
        					
   						}
			            if ($_FILES['avatar']['error'] > 0)
			            {
			                $errFile = 'Upload error';
			                
			            }
			            else{
			                // Upload file
			                move_uploaded_file($_FILES['avatar']['tmp_name'], './img/'.$_FILES['avatar']['name']);
			               
			            }
			        	}
				        else{
				            $errFile = 'Bạn chưa chọn ảnh upload';
				            
				        }
				       
				        $Pass = md5($Pass);
						if ($check) {
							$sql = "INSERT INTO user(
												user_name,
												user_pass,
												user_email,
												user_gender,
												user_country,
												user_info,
												avatar
											) VALUES (
												'$Name',
												'$Pass',
												'$Email',
												'$Gender',
												'$Country',
												'$Info',
												'$hinhanh'
											)";
							echo "Infomation"."</br>";
							echo "Your name : ".$Name."</br>";
							echo "Your email : ".$Email."</br>";
							echo "Gender : ".$_POST['gender']."</br>";
							echo "Country : ".$_POST['country']."</br>";
							echo "<b>Avatar : </b> <img src="."img/".$hinhanh." />";
							mysqli_query($conn,$sql);
							echo "chúc mừng bạn đã đăng ký thành công";
					
				}
		}
		function check_email($Email) {
    			return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email)) ? FALSE : TRUE;
		}
		function create_thum($src,$dest,$desired_width){
			/* read the source image */
			$source_image = imagecreatefrompng($src);
			$width = imagesx($source_image);
			$height = imagesy($source_image);
			/* find the "desired height" of this thumbnail, relative to the desired width  */
			$desired_height = floor($height * ($desired_width / $width));
			
			/* create a new, "virtual" image */
			$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
			
			/* copy source image at a resized size */
			imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
			
			/* create the physical thumbnail image to its destination */
			imagejpeg($virtual_image, $dest);
	

		}
	  ?>
	<form action="#" name="Sign-in" method="POST" enctype="multipart/form-data">
		<p>User <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"></p>
		<span class="err"> <?php echo $errName; ?></span>
		<p>Email <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></p>
		<span class="err"> <?php echo $errEmail; ?></span>
		<p>Password <input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"></p>
		<span class="err"> <?php echo $errPass; ?></span>
		<p>Confirm Password <input type="password" name="repassword" value="<?php echo isset($_POST['repassword']) ? $_POST['repassword'] : '' ?>"></p>
		<span class="err"> <?php echo $errRepass; ?></span>
		<p>Gender</p>
		<p>Male<input type="radio" name="gender" value="Male" <?php echo $checkMale;?> ></p>
		<p>Female<input type="radio" name="gender" value="Female" <?php echo $checkFemale;?> ></p>
		<p>Other<input type="radio" name="gender" value="Other" <?php echo $checkOther;?> ></p>
		<span class="err"> <?php echo $errGender; ?></span>
		<p> Country
		<select name="country">
		<option value="" <?php echo $errConutry;?> ></option>
		  <option value="Japan" <?php echo $checkJP;?> >Nhựt</option>
		  <option value="Korea" <?php echo $checkKR;?> >Hèn Quéc</option>
		  <option value="China" <?php echo $checkCN;?>>Tàu</option>
		</select></p>
		<p>Info <textarea type="text" name="info"></textarea></p>
		<p>Avatar <input type="file" name="avatar" id="avatar"></p>
		<span class="err"> <?php echo $errFile; ?></span>
		</br>
		<input type="Submit" name="Submit" value="Sign">
	</form>
	
</body>
</html>