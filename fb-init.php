<?php
//start the session
session_start();
require'./vendor/autoload.php';
require 'user/db/connect.php';
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
		header("location:user/home.php");
	}
}catch (Exeption $exc){
	echo $exc->getTraceAsString();
}
if(isset($_SESSION['acces_token'])){
	try{
		$fb->setDefaultAccessToken($_SESSION['acces_token']);
		$res = $fb->get('/me?locale=en_US&fields=name,email');
		$user = $res->getGraphUser();
		$name = $user->getField('name');
		$email = $user->getField('email');
		$id = $user->getField('id');


		 
		

$query = "SELECT * from User WHERE token_id = '$id'";
$sql = $connect->query($query);
if($sql->num_rows < 1){

$query = mysqli_query($connect, "INSERT into User(`name`, `email`, `token_id`, `Gender`, `City`, `Barangay`, `Address`, `Contact`, 
, `UserName`, `Password`, `Photo`) VALUES('$name','$email','$id','N/A','N/A','N/A','N/A','N/A','N/A','N/A','profile.jpg')  ");
	
}

}catch (Exeption $exc){
	echo $exc->getTraceAsString();
}

}
?>