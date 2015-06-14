<?php 
require_once("header.php");
require_once("sidebar.php");

require_once("controller/article.php");

$articleController = new ArticleController();
if ($_SESSION["admin"] === '1') {
	echo '<a href="add_article.php"><div class="addArticle">Add Article</div></a>';
}
?>

<div class="content">
<?php

$articles = $articleController->getArticles();
$count = count($articles);
for ($i = 0; $i < $count; $i++) {
?>
<div class="fullArtsDivsConteiner">
	<a  href="article.php?id=<?= $articles[$i]->id?>">
		<div class="fullArtsDivs">
			<div class="title">
				<?= $articles[$i]->title ?>
			</div>
			<div>
				<?= $articles[$i]->content .'...' ?>
			</div>
			<div class="date"><?= $articles[$i]->reg_date ?>
			</div>
		</div>
	</a>
</div>
<?php
}
?>
				</div>
			</div>
		</div>
	</body>
</html>