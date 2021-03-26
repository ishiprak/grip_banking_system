<?php

	$conn = mysqli_connect('sql6.freemysqlhosting.net','sql6401607','tWFeC5EBGI','sql6401607','3306');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
