<?php 
require_once("link.php");
require_once("class/article.php");
require_once("class/comment.php");

Class ArticleModel extends DatabaseConnection {
	function  __construct () {	
		parent::__construct();
	}
	
	public function addArticle ($title, $content, $category) {
		$sql = "INSERT INTO article (title, content, category) VALUES ('".
			mysqli_real_escape_string($this->link, $title)."','".
			mysqli_real_escape_string($this->link, $content)."','".
			mysqli_real_escape_string($this->link, $category)."' )";
		$result = $this->link->query($sql);
		$id = mysqli_insert_id($this->link);
	}

	public function deleteArticle ($id) {
		$sql = "delete comment, article from article left join comment on article.id = comment.art_ids where article.id=".mysqli_real_escape_string($this->link, $id);
		$result = $this->link->query($sql);
	}

	public function getArticles() {
		$sql = "select * from article";
		$result = $this->link->query($sql);
		$articles = array();
		$index = 0; 
		while($row = mysqli_fetch_array($result)) {
			$articles[$index] = new Article($row);	
			$index++;		
		}

		return $articles;
	}

	public function getArticle ($id) {
		$sql = "select * from article where id=".$id;
		$result = $this->link->query($sql);
		$article = null;
		while($row = mysqli_fetch_array($result)) {
			$article = new Article($row);
		}

		return $article;
	}

	// public function checkOnceArticle ($id) {
	// 	//check for comment
	// 	$sql = "select * from article where id=".$id;
	// 	$result = $this->link->query($sql);
	// 	return $result;
	// }

	public function getComments ($artId) {
		$sql = "select comment.*, user.name as owner from comment left join user on ".
		"user.id =comment.owner where art_ids=".$artId;

		$result = $this->link->query($sql);
		$index = 0; 
		$comment = array();
		while($row = mysqli_fetch_array($result)) {
			$comment[$index] = new Comment($row);	
			$index++;		
		}

		return $comment;
	}

	public function addComment ($art_id, $content, $owner) {
		$sql = "INSERT INTO comment (art_ids, content, owner) VALUES ('".mysqli_real_escape_string($this->link, $art_id).
			"','".mysqli_real_escape_string($this->link, $content)."','".mysqli_real_escape_string($this->link, $owner)."' );";
		$result = $this->link->query($sql);
	}

	public function deleteComment ($id) {
		
		$sql = "DELETE FROM comment  WHERE comment.id = '".mysqli_real_escape_string($this->link, $id)."' ";
		$result = $this->link->query($sql);
 
	}

	// public function checkArticle ($id) {
	// 	//check for comment
	// 	$sql = "select * from comment where id=".$id;
	// 	$result = $this->link->query($sql);
	// 	return $result;
	// }


}
?>
