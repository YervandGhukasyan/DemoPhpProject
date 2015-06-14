<?php
require_once("controller/user.php");
require_once("controller/article.php");

$userController = new UserController();
$articleController = new ArticleController();
session_start();
$command = isset($_POST["command"]) ? $_POST["command"] : "";
if ("logOut" == $command) {
	$userController->logOut();
	header('Location: index.php');
	// controller add article
} else if ("logIn" == $command) {
	$userController->logIn($_POST["email"], $_POST["pass"]);
	header('Location: article_list.php');

} else if ("addArticle" == $command) {
	$title = isset($_POST["title"]) ? $_POST["title"] : "";
	$content = isset($_POST["content"]) ? $_POST["content"] : "";
	$category = isset($_POST["category"]) ? $_POST["category"] : "";
	$articleController->addArticle($title, $content, $category);
	header('Location: article_list.php');	
} else if ("addComment" == $command) {
	$content = isset($_POST["content"]) ? $_POST["content"] : "";
	$artId = isset($_POST["artId"]) ? $_POST["artId"] : "";
	$owner = isset($_SESSION["name"]);
	$articleController->addComment($artId, $content, $owner);
	header('Location: article.php?id='.$artId);	
} else if ("createAnAccount" == $command) {
	$name = isset($_POST["name"]) ? $_POST["name"] : "";
	$pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$admin = 0;
	$userController->addUser($name,$email,$pass,$admin);
	header('Location: index.php');	
 } elseif ("deleteComment" == $command) {
 	$articleController->deleteComment();
 }

?>