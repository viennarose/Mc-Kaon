<?php
	$connect = new mysqli('localhost', 'mdcapst_mc-kaon', 'ilovemckaon', 'mdccapst_mc-kaon');

	if ($connect->connect_error) {
	    die("Connection failed: " . $connect->connect_error);
	}
	
?>