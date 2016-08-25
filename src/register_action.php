<?php 
	include 'db.php';
	
	$email = $_POST['email'];
	$password1 = md5($_POST['password1']);
	$password2 = md5($_POST['password2']);
	$name = $_POST['name'];
	$date_of_birth = $_POST['date_of_birth'];
	$info = $_POST['info'];
	$nationality = $_POST['nationality'];
	$placeOfBirth = $_POST['place_of_birth'];
	
        function verifyPassword1NPassword2() {
        $password1 = "test";
        $password2 = "test";

        if ($password1 != $password2)
        {
                echo '<p>Error: password does not match. Try again</a>';
        }
       }
	
	if ($password1 != $password2) {
		include "common/header.php";
		include "common/mainmenu.php";
		echo '<p>Error: password does not match. Try again</a>';
		echo '<p><a href="register.php">Try again</p>';
		include "common/footer.php";
		exit;
	}
	
	$sql = "INSERT INTO users (name, info, date_of_birth, email, password, nationality, place_of_birth) VALUES ('$name', '$info', '$date_of_birth', '$email', '$password1', '$nationality', '$placeOfBirth');";
	$result = mysql_query($sql, $link);
	
	if ($result == false) {
		include "common/header.php";
		include "common/mainmenu.php";
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="register.php">Try again</a></p>';
		include "common/footer.php";
		exit;
	}
	else {
		header('Location: private.php');
	}

	mysql_close($link);
?>
