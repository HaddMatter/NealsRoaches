<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"] = 0;
	} else{
		$_SESSION["count"]++;
	}
?>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<title>Neal's Roaches - FAQ</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
	
		
		<div class = "form">
			<div class="container">
				<form action="login_action.php" method="post">
					<label>Username:</label><input type="text" name="username"><br />
					<label>Password:</label><input type="password" name="password"><br />
					<p><input type="submit" /></p>
				</form>
			</div>
		
			<div class = "info">
					<p>Please remember that passwords must follow these rules:</p>
					<ul>
						<li>Passwords must be at least 8 letters long.</li>
						<li>Passwords must contain at least one number and one letter.</li>
					</ul>
			</div>
		</div>
	</body>
</html>