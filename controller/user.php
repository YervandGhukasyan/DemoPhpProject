<?php
require_once("model/user.php");
class UserController {
	public $userModel;
	public $user;
	public function __construct () {
		$this->userModel = new UserModel();
	}

	public function logIn ($email, $pass) {
		if(isset($_SESSION["id"])) {
			$this->logOut();
		}
		$user = $this->userModel->checkUser($email, md5($pass));
		if($user->id !== null) {
			
			session_start();
			$_SESSION["id"] = $user->id;
			$_SESSION["name"] = $user->name;
			$_SESSION["admin"] = $user->admin;
			return $user;	
		}
		header('Location: index.php');
		exit();
	}

	public function logOut () {
		session_start();
		return session_destroy();
		// kill session;
	}

	public function addUser ($name, $email, $pass, $admin) {
		if (!preg_match('/^[A-Za-zéåäöÅÄÖ\s\ ]*$/', $name)) {
			return "your name should contain only letters";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return "wrong email";
		}
		if (strlen($pass) > 32 || strlen($pass) < 8) {
			return "incorrect length for password";
		}
		$checkedmail = $this->userModel->checkEmail($email);
		if (!$checkedmail) {
			$this->userModel->addUser($name, $email, md5($pass), $admin);
			$this->logIn($email, $pass);
		} else {
			 return 'the email is already used, please register by other email';
		}


	}
}

?>