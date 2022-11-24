<?php
	include './fb-init.php';
	session_destroy();
unset($_SESSION['acces_token']);
	header('location: ../login');
?>