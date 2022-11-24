<?php
include'fb-init.php';
	if(!isset($_SESSION['acces_token']) || trim($_SESSION['acces_token']) == ''){
		
		if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == '') {
		header('location: ../login.php');
	}
	}
	
	

	if(isset($_SESSION['acces_token'])){
	$fb->setDefaultAccessToken($_SESSION['acces_token']);
		$fb->setDefaultAccessToken($_SESSION['acces_token']);
		$res = $fb->get('/me?locale=en_US&fields=first_name,email,last_name,middle_name');
		  
		$user = $res->getGraphUser();
		
		$id = $user->getField('id');
		$image = 'http://graph.facebook.com/'.$id.'/picture';

	$sql = "SELECT * FROM `user` WHERE token= '$id' ";
	$query = $connect->query($sql);
	$users = $query->fetch_assoc();
	$myid = $users['id'];
	$FirstName = $users['FirstName'];
	$MiddleName = $users['MiddleName'];
	$LastName = $users['LastName'];
	$Gender = $users['Gender'];
$City = $users['City'];
	$Barangay = $users['Barangay'];
		$Address = $users['Address'];

	$Address = $users['Address'];

$Contact = $users['Contact'];
		$Email = $users['Email'];

	$UserName = $users['UserName'];
$Password = $users['Password'];

		$date = $users['date'];

	$join_date = date("F d, Y", strtotime($date));
	$mytoken = $users['token'];

	$fullname = $LastName.', '.$FirstName.' '.$MiddleName;
	$address = $Address.', '.$Barangay.', '.$City;
	
	$image = 'profile.jpg';


	}

elseif(isset($_SESSION['admin'])) {
	$sql = "SELECT * FROM `user` WHERE id= '".$_SESSION['admin']."' ";
	$query = $connect->query($sql);
	$users = $query->fetch_assoc();
	$myid = $users['id'];
	$FirstName = $users['FirstName'];
	$MiddleName = $users['MiddleName'];
	$LastName = $users['LastName'];
	$Gender = $users['Gender'];
$City = $users['City'];
	$Barangay = $users['Barangay'];
		$Address = $users['Address'];

	$Address = $users['Address'];

$Contact = $users['Contact'];
		$Email = $users['Email'];

	$UserName = $users['UserName'];
$Password = $users['Password'];
$Photo = $users['Photo'];
		$date = $users['date'];

	$join_date = date("F d, Y", strtotime($date));
	$mytoken = $users['token'];

	$fullname = $LastName.', '.$FirstName.' '.$MiddleName;
	$address = $Address.', '.$Barangay.', '.$City;
if ($users['Photo'] !='' || $users['Photo'] !=' ') {
	$image = $users['Photo'];
}else{
$image = 'profile.jpg';
}
}

