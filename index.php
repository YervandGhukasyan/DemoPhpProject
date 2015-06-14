<?php 
require_once("header.php");
require_once("sidebar.php");
?>
<div class="content">
	<?php
	if(isset($_SESSION["id"])) {

		header('Location: article_list.php');
	} else {
		?>
		<form method="post" action="router.php">
			<label for="email">E-mail</label>
			<input name="email" maxlength="40" id="email" type="email">
			<label for="pass">Password</label>
			<input name="pass"  minlength="8" maxlength="32"  id="pass" type="password">
			<input type="submit" value="Log-in">
			<input type="hidden" name="command" value="logIn">
		</form>

		<a href="createAnAccount.php"><input type="submit"  value="Create an account"></a>
		<?php

	}

	?>
				</div> <!-- Content -->
		</div> <!-- Wrapper -->
	</body>
</html>