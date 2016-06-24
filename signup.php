<?php include "includes/top.inc.php" ?>

<title>proiect</title>
<meta name="description" content="A introduction website">
<meta name="keywords" content="blog, website, others">

<?php include "includes/header.inc.php"; ?>
<?php include "includes/rightDiv.inc.php"; ?>
<?php include "includes/circles.inc.php"; ?>


	<h2>Creare cont</h2>

	<?php 
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=empty') !== false){
		echo "Fill out all fields!";
	}
	else if(strpos($url, 'error=username') !== false){
		echo "Username already exists!";
	}

?>

	<form action="sql/signup.sql.php" method="post" id="signInForm">
		
		<input type="text" name="first" placeholder="First name"><br>
		<input type="text" name="last" placeholder="Last name"><br>
		<input type="text" name="uid" placeholder="Username"><br>
		<input type="password" name="pwd" placeholder="Password"><br>
		<button type="submit">Sign up</button><br>
		<button type="reset">Reset</button>

	</form>


<?php include "includes/rockets.inc.php"; ?>

<?php include "includes/footer.inc.php"; ?>