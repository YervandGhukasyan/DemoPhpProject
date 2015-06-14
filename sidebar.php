<?php
require_once("controller/article.php");
$artController = new ArticleController();
?>
 <div class="side-bar">

	<ul class="first-side-menu">
		<li>
			<a href="profile.php">My Profile</a></li>
		<li>
			<a href="article_list.php">Article list</a>
		</li>
	</ul>
	<ul class="second-side-menu">
		<li class="sub-headline">Articles categories</li>		
		<li>
			<a href="article_list.php">First Article</a>
		</li>
		<li>
			<a href="article_list.php">Second Article</a>
		</li>		
		<li>
			<a href="article_list.php">Third Article</a>
		</li>
	</ul>


</div>

<?php

?>