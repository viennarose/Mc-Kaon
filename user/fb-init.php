<?php
//start the session
session_start();
require'./vendor/autoload.php';
require 'db/connect.php';
$fb = new Facebook\Facebook([
'app_id' => '3104106426472854',
'app_secret' => '65a888c5079880e8b6b06bc9da67efe2',
'default_graph_version' => 'v2.7'
]);




$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("https://el-raza.com/login");

try{
	$accessToken = $helper->getAccessToken();
	if (isset($accessToken)) {
		$_SESSION['acces_token'] = (string)$accessToken;
		header("location:user/home");
	}
}catch (Exeption $exc){
	echo $exc->getTraceAsString();
}
if(isset($_SESSION['acces_token'])){
	try{
		$fb->setDefaultAccessToken($_SESSION['acces_token']);
		$res = $fb->get('/me?locale=en_US&fields=first_name,email,last_name,middle_name');
		$user = $res->getGraphUser();
		$name = $user->getField('first_name');
		$email = $user->getField('email');
		$id = $user->getField('id');
$middle_name = $user->getField('middle_name');
$last_name = $user->getField('last_name');
		 
		



		$query = "SELECT * from user WHERE token = '$id'";
$sql = $connect->query($query);
if($sql->num_rows < 1){

$query = mysqli_query($connect, "INSERT into user(`FirstName`, `MiddleName`, `LastName`, `Email`, `token`, `Gender`, `City`, `Barangay`, `Address`, `Contact`, `UserName`, `Password`, `Photo`, `status`) VALUES('$name','$middle_name','$last_name','$email','$id','N/A','N/A','N/A','N/A','N/A','N/A','N/A','profile.jpg','y')  ");
	
}

}catch (Exeption $exc){
	echo $exc->getTraceAsString();
}

}
?>