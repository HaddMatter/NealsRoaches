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
		<title>Neal's Roaches - shop</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
		
		<p>this page will have all of the products (possibly with a menu on the side)</p>
		<p>each item should have a button that allows the person to add it to their cart</p>
		<div class = "left_no_separator">
			<p>Dubia Roaches</p>
		</div>
		<div class = "left_separator">
			<p>Other Items</p>
		</div>
		
		<?php
			require_once("footer.php");
		?>
	</body>
</html>