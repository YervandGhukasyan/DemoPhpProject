<?php

class Article {
	public $id;
	public $title;
	public $content;
	public $comments; // array (comment)
	public $reg_date;

	public function __construct ($row) {
		$this->id = $row["id"];
		$this->title = $row["title"];
		$this->content = $row["content"];
		$this->reg_date = $row["reg_date"];
	}
}


?>