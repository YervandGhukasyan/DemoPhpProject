<?php
require_once("controller/user.php");
class User {
	public $name;
	public $id;
	public $admin;  //true or false*/

	function  __construct ($data) {
		while($row = mysqli_fetch_array($data)) {
			$this->id = $row["id"];
			$this->admin = $row["admin"];
			$this->name = $row["name"];
			
		}
	// $articleList = new ArticleList();
	}
}
// $user = new User();
// if ($user->$admin === true) {
//  echo 'You Admin';
// } else {
//  echo 'You User';
// }
// echo $user->$name

?>