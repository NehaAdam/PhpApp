<?php
	session_start();
	
	include "common/header.php";
	include "common/mainmenu.php";
?>
	<h2>Welcome to User Management Demo Prj!!!</h2>

	<p>
	Your can start to <a href="register.php">register</a> as a new user.
	Then, you can <a href="search.php">search</a> others users.
	And you can <a href="login.php">login</a> to access your private area.
	</p>
<?php	
	include "common/footer.php";
?>