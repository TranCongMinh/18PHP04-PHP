<?php 
	class ConnectDB {
		
		function connect(){
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = '18php04_minhminh';
			$this->conn = mysqli_connect($server, $username, $password, $database);
			// mysqli_set_charset($this->conn,"utf8");
			return $this->conn;
		}
	}
?>