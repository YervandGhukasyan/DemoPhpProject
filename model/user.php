<?php 
require_once("link.php");
require_once("class/user.php");
 class UserModel extends DatabaseConnection {
	function  __construct () {	
		parent::__construct();
	}
		
	function addUser ($name, $email, $pass, $admin) {
		$sql = "INSERT INTO user (admin,name,pass,email) VALUES ('".
			mysqli_real_escape_string($this->link, $admin)."' ,'".
			mysqli_real_escape_string($this->link, $name)."' ,'".
			mysqli_real_escape_string($this->link, $pass)."' ,'".
			mysqli_real_escape_string($this->link, $email)."')";
		$result = $this->link->query($sql);
		return $result;
	}

	function deleteUser ($id) {
		$sql = "DELETE FROM user WHERE regist.ids = '".mysqli_real_escape_string($this->link, $id).
		"' ";
		$result = $this->link->query($sql);

	}

	function checkUser ($email, $pass) {
		$sql = "SELECT * FROM user WHERE email='".mysqli_real_escape_string($this->link, $email).
		"' AND pass= '".mysqli_real_escape_string($this->link, $pass)."'";
		$result = $this->link->query($sql);
		return new User($result);
	}
	function checkEmail ($email) {
		$sql = "SELECT * FROM user WHERE email='".mysqli_real_escape_string($this->link, $email)."'";
		$result = $this->link->query($sql);
		if($result->num_rows) {
			return new User($result);
		}
		return null;
	}
}

?>