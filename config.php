<?php

	$servername = "localhost";
        $username = "id16203220_root";
        $password = "Svo{|W#>?hTa[ls5";
        $dbname = "id16203220_hvsbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Sorry we failed to connect: ".mysqli_connect_error());
	}

?>
