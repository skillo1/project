<?php include "includes/top.inc.php" ?>

<title>proiect</title>
<meta name="description" content="A introduction website">
<meta name="keywords" content="blog, website, others">

<?php include "includes/header.inc.php"; ?>
<?php include "includes/rightDiv.inc.php"; ?>
<?php include "includes/circles.inc.php"; ?>

	<h2>Sign in</h2>

	<form action="sql/login.sql.php" method="post" id="signInForm">
		
		<input type="text" name="uid" placeholder="Username"><br>
		<input type="password" name="pwd" placeholder="Password"><br>
		<button type="submit">Sign in</button>
	
	</form>

<?php include "includes/rockets.inc.php"; ?>

<?php include "includes/footer.inc.php"; ?>