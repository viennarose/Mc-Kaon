<?php session_start();
	include 'connect.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../index.php');
	}

	$sql = "SELECT * FROM `account` WHERE `id` = '".$_SESSION['admin']."' ";
	$query = $connect->query($sql);
	$user = $query->fetch_assoc();
	
	$fullname = $user['LastName'].', '.$user['First_name'].' '.$user['Middle_name'].'.';
	$id = $user['id'];
	
$Account_Type = $user['Account_Type'];

?>