<html>

	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="script.js"></script>
	</head>
	<body>
		<div class="wrapper">
				<div class="topDiv">
					<span class="logo">the best site for articles</span>
					<div class="user-block">				
						<?php
						session_start();
						require_once("controller/user.php");
						$userController = new UserController();
						if(isset($_SESSION["id"])) {
						?>
						<form method="post" action="router.php" class="log-out">
							<input type="submit" class="btn" value="log-out">
							<input type="hidden" name="command" value="logOut">
						</form>
						<span class="greeting">hi <?=$_SESSION["name"]?></span>
						<?php
						}
						?>
					</div>
				</div>
