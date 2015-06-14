<?php
require_once("header.php");
?>
					<form method="post" name="registForm" onsubmit="return validate()" action="router.php">
						<label for="name">Name</label>
						<input min="5" minlength="3" maxlength="15" name="name" id="name" type="text">
						<label for="email">E-mail</label>
						<input name="email" maxlength="40"  id="email" type="email">
						<label for="pass">Password</label>
						<input name="pass" minlength="8" maxlength="32" id="pass" type="password">
						<input type="submit" value="Create an account">
						<input type="hidden" name="command" value="createAnAccount">
					</form>
				</div>
		</div>
	</body>
</html>