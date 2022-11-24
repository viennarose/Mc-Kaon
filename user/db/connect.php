<?php
	$connect = new mysqli('localhost', 'root', '', 'mackaon');

	if ($connect->connect_error) {
	    die("Connection failed: " . $connect->connect_error);
	}
	
?>