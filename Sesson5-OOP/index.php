<?php
	class User{
		var $username;
		var $password;
		var $email;
		var $phone;
		var $address;
		function register(){
			echo "</br> Đăng kí";
		}
		function login(){
			echo "</br> Đăng nhập";
		}
		private function add(){
			echo "</br> Thêm";
		}
		function view(){
			echo "</br> Xem";
		}
		private function list(){
			echo "</br> Danh sách";
		}
		

	}
	echo "</br>----------------------";
		$user = new User();
		$user->register();
		$user->login();
	echo "</br>----------------------";
	class Customer extends User{
		var $receive_address;
		var $id_customer;
		function register(){
			echo "</br> Customer đăng kí";
		}
		function login(){
			echo "</br>Customer đăng nhập";
		}
		function pay(){
			echo "</br> Customer thanh toán";
		}
		function history_pay(){
			echo "</br> Customer lịch sử mua hàng";
		}
	}
	echo "</br>----------------------";
		$Customer = new Customer();
		$Customer->register();
		$Customer->pay();
		$Customer->history_pay();
	echo "</br>----------------------";
?>
	<a href="index.php?action=home">Home</a>
	<a href="index.php?action=CONTACT">CONTACT</a>
	<a href="index.php?action=NEW">NEW</a>
	<a href="index.php?action=INFO">INFO</a>
<?php

	include'Controller/controller.php';
	$controller = new Controller;
	$controller -> handleRequest();
?>