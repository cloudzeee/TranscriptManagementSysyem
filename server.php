<?php
	$conn = mysqli_connect("localhost", "root", "", "database");// conncets it to the database transcript, i am making use of a localhost xampp as my server , username of xamp is root , and password is ""(empty) .

	if(!$conn) {
		die("connection failed:".mysqli_connect_error());
	} // this code tells us what to do if there is no connection, the mysqli_connect_error tells us the type of error.

?>