<?php 
require_once("header.php");
require_once("sidebar.php");
require_once("controller/article.php");

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$articleController = new ArticleController(); 
$article = $articleController->getArticle($id);
$comments = $articleController->getComments($id);
// $commentController = new CommentController();
// $comment = $commentController->getcomment($id);

?>
<div class="content">
				<div class="addArticle">
					<div><?=$article->title?></div>
					<p><?=$article->content?></p>
					<div class="date"><?= $article->reg_date ?></div>
				</div>
				<?php
					$count = count($comments);
					for ($i = 0; $i < $count; $i++) {
				?>
						<div> 
							<p><?=$comments[$i]->owner?> wrote</p>
							<p class="comment"><?=$comments[$i]->content?></p>
							<p class="date"><?=$comments[$i]->reg_date?></p>
				<?php
					if ($_SESSION["admin"] === '1'){
							echo '<input type="submit" value="Delete Comment">';
					}
				?>
	
						</div>
				
							
						
				<?php	}

				?>
				<div>Add a comment</div>
				<form action="router.php" method="POST">
					<p><textarea minlength="1" maxlength="255" name="content"></textarea></p>
					<p><input type="submit" value="Save"></p>
					<input type="hidden" name="command" value="addComment">
					<input type="hidden" name="artId" value="<?=$article->id?>">
					<input type="hidden" name="owner" value="<?=$_SESSION['id']?>">
				</form>
			  </div>
			</div>
		</div>
	</body>
</html>