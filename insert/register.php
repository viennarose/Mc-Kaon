<?php
 include'../db/database.php';


$First = $_POST['First'];
$Middle = $_POST['Middle'];
$Last = $_POST['Last'];
$Username = $_POST['Username'];

$city = $_POST['City'];
$barangay = $_POST['barangay'];
$Contact = $_POST['Contact'];
$gender = $_POST['gender'];
$Email = $_POST['Email'];


$Address = $_POST['Address'];

if ($gender == 'Male') {
	$photo = 'profile.jpg';
}else{
	$photo = 'female.jpg';
}
$First = ucwords($First);
$Middle = ucwords($Middle);
$Middle = ucwords($Middle);
$Address = ucwords($Address);
$Last = ucwords($Last);




$First = addslashes($First);
$Middle = addslashes($Middle);
$Last = addslashes($Last);
$Address = addslashes($Address);
 $Username = addslashes($Username);
$Email = addslashes($Email);


 $qrcoding = "1234567890";

                   $generate = substr(str_shuffle($qrcoding),0,15);

$Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO `user`(`token`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `City`, `Barangay`, `Address`, `Contact`, `Email`, `UserName`, `Password`, `Photo`) VALUES ('$generate','$First','$Middle','$Last','$gender','$city','$barangay','$Address','$Contact','$Email','$Username','$Password','$photo')";


  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>