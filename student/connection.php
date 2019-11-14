<?php
	$db = mysqli_connect("localhost", "root", "", "library");
	
	
	/*checks if db is connected*/
	if (!$db) {
		die("Connection Failed:" .mysqli_connect_error());
		
	}
	
	echo "Connected Successfully!!!";
?>