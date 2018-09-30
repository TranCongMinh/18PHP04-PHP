<?php 
	include('connect.php');
	
	$sql = "SELECT * FROM `user`";
	$user = $_POST['username'];
	$pass = $_POST['password'];
	echo $user;
	$sql = "SELECT username FROM `user`";
	$rs=mysqli_query($conn,$sql);
	if ($rs) {
    while ($row=mysqli_fetch_row($rs)) {
        echo $row['username'];
    }

}
?>