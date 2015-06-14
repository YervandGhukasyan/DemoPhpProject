<?php
class DatabaseConnection {
	//
 	public $host = "localhost";
 	public $user = "root";
 	public $password = "root";
 	public $database ="test";
 	public $link;
 	public function __construct () {
		return $this->link = mysqli_connect($this->host,$this->user,$this->password,$this->database);
	 
 	}
}
?>