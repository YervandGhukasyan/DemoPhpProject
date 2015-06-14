<?php

require_once("model/user.php");
require_once("model/article.php");
Class ArticleController {
	public $articleModel;
	public $userModel;
	public $articleCategories = ["study", "nature", "history", "entertainment"];
	public function __construct (){
		$this->articleModel =  new ArticleModel();
		// $this->userModel = new UserModel();
	}

	public function getArticles (){
		$articles = $this->articleModel->getArticles();
		$count = count($articles);
		for ($i =0; $i < $count; $i++) {
			$articles[$i]->content = substr($articles[$i]->content, 0,70);
		}
		return $articles;
		
	}

	public function getArticle ($id) {
		return $this->articleModel->getArticle($id);
	}

	public function checkUser () {

	}
	public function addArticle ($title, $content, $category) {
		if(!in_array($category, $this->articleCategories)) {
			return;
		}
		if (isset($_SESSION['id']) && "1" === $_SESSION['admin']) {		
			$this->articleModel->addArticle($title, $content, $category);
		} else {
			return "you don't have rights to add an article";
		}
	}

	public function deleteArticle ($id) {
		if (isset($_SESSION['id']) && "1" === $_SESSION['admin']) {		
			$this->articleModel->deleteArticle($id);	
		} else {
			return "you don't have rights to add an article";
		}
	}

	public function addComment ($artId, $content, $owner) {
		$this->articleModel->addComment($artId, $content, $owner);
	}

	public function getComments ($artId) {
		return $this->articleModel->getComments($artId);
	}

	public function getPopularArticles () {

	}

	public function getRecentArticles () {

	}



}

?>