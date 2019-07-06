<?php
class Database{
	function __construct(){
		$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		mysqli_set_charset($this->conn,"utf8");

		if($this->conn->connect_error){
			die("connection failed :".$this->conn->connect_error);
		}
		
	}

}
?>