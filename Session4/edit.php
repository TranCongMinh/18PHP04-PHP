<?php
	include('connect.php');
	$username = $_POST['username'];
	$newusername = $_POST['newusername'];
	$sql_update = "UPDATE `user` SET `username`="$username" WHERE `username` = $newusername";
	

?>
<form action="#" method="post">
	Tên đăng nhập cũ: </br> <input type="text" name="username" placeholder="Nhập username" /> <br />
     Tên đăng nhập mới: </br> <input type="text" name="newusername" placeholder="Nhập username" /> <br />

          <input type="submit" name="submit" value="Đăng nhập" />
  </form>