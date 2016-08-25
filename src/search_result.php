<?php
	session_start();

	include "common/header.php";
	include "common/mainmenu.php";
	
	include 'db.php';

      /*  $name = $_POST['name'];
        function verifySearchStringNotEmpty() {
    if(!isset($_POST['name']) || empty($_POST['name'])) {
                echo "<p>Empty search is not allowed</p>";
        }

        }

        function verifyUserExists() {
                $sql = "select id, name, date_of_birth from users where name like '%$name%';";
                $result = mysql_query($sql, $link);

                if ($result == false) {
                        echo '<p>Error: cannot execute query</p>';
                }
                else {
                        $num_rows = mysql_num_rows($result);

                        if($num_rows >= 1) {
                                while($row = mysql_fetch_array($result)) {
                                        echo "<p>";
                                        echo "<b>Name:</b> " . "<a href=\"search_full_result.php?id={$row["id"]}\">" . $row["name"] . "</a><br />";
                                        echo "<b>Date of birth:</b> " . $row["date_of_birth"];
                                        echo "</p>";
                                }
                        }
                        else {
                                echo '<p>No user found</p>';
                        }

        }*/        

	echo "<fieldset><legend>User's Information</legend>";

	if(!isset($_POST['name']) || empty($_POST['name'])) {
		echo "<p>Empty search is not allowed</p>";
	}
	else {
		$name = $_POST['name'];
	
		$sql = "select * from users where name like '%$name%';";
		$result = mysql_query($sql, $link);
		
		if ($result == false) {
			echo '<p>Error: cannot execute query</p>';
		}
		else {
			$num_rows = mysql_num_rows($result);

			if($num_rows >= 1) {
				while($row = mysql_fetch_array($result)) {
					echo "<p>";
					echo "<b>Name:</b> " . "<a href=\"search_full_result.php?id={$row["id"]}\">" . $row["name"] . "</a><br />";
					echo "<b>Date of birth:</b> " . $row["date_of_birth"];
					echo "<br/>";
					echo "<b>Place of birth:</b> " . $row["place_of_birth"];
					echo "<br/>";			
					echo "<b>Email:</b> " . $row["email"] . "<br />";
					echo "<b>Information:</b> " . $row["info"] . "<br/>";
					echo "<b>Nationality:</b> " . $row["nationality"];
					echo "</p>";
				}
			}
			else {
				echo '<p>No user found</p>';
			}
		}
	}
	
	mysql_close($link);
	
	echo "</fieldset>";
	
	include "common/footer.php";
?>
