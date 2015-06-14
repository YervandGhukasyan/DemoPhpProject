<?php

class Comment {
	public $id;
	public $art_id;
	public $user_id;
	public $comment; // array (comment)
	public $reg_date;

	public function __construct ($row) {
		$this->id = $row["id"];
		$this->art_id = $row["art_ids"];
		$this->owner = $row["owner"];
		$this->content = $row["content"];
		$this->reg_date = $row["reg_date"];
	}
}


?>