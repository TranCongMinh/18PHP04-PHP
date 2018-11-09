<?php
	/**
	  * 
	  */
	 class garenal extends ConnectDB
	 {
	 	
	 	public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function ckeckLogin()
	 } 
 ?>