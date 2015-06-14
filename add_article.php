<?php 
require_once("header.php");	
require_once("controller/article.php");
require_once("sidebar.php");
$articleController = new ArticleController(); 

?>
				<div>Add a article and title</div>
				<form action="router.php" method="POST">
					<p><input type="text" name="title"></p>
					<p><textarea name="content"></textarea></p>
					<p><input type="submit" value="Save"></p>
					<select name="category"> 
					<?php
					for ($i=0; $i < count($articleController->articleCategories); $i++) { 
						echo "<option value='".$articleController->articleCategories[$i]."'>".$articleController->articleCategories[$i]."</option>";
					}
						?>
					</select>
					<input type="hidden" name="command" value="addArticle">
				</form>
			</div>
		</div>
	</body>
</html>