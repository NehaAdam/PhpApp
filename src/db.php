<?php
	$link = mysql_connect("10.80.34.137:3306" , "root", "root");
	
	if ($link == false) {
		echo "Error: can't connect to database server";
		exit;
	}
	
	if (mysql_select_db("userManPrj", $link) == false) {
		echo "Error: can't connect to database";
		exit;
	}
?>
