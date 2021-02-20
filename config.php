<?php

	$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hvsbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Sorry we failed to connect: ".mysqli_connect_error());
	}

?>
