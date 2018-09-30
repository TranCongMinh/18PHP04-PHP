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
		$user->list();
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