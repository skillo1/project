<div id="right" class="clear">
	<?php if(!isset($_SESSION['id'])) { ?>
		<ul class="account">
			<li><a href="login.php">Sign in</a></li>
			<li><a href="signup.php">Sign up</a></li>
		</ul>
		<?php
		}
		?>

	<br><br><br>

	<?php if(isset($_SESSION['id'])) { ?>
		<form action="sql/logout.sql.php" method="post">
			<button id="logoutButton">Log out</button>
		</form>	
	<?php
		}
		?>

	<div class="search">
    	<span class="icon"><i class="fa fa-search"></i></span>
    	<input type="search" id="search" placeholder="Search..." />
	</div>
</div>