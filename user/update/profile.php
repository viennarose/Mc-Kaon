<?php
include'../db/connect.php';

$id = $_POST['ids'];
$Fname = $_POST['Fname'];
$Mname = $_POST['Mname'];
$Lname = $_POST['Lname'];
$gender = $_POST['gender'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$barangay = $_POST['barangay'];
$user = $_POST['user'];
	$oldpass = $_POST['oldpass'];
$new_pass = $_POST['pass'];

$Fname = ucfirst($Fname);
$Mname = ucfirst($Mname);
$Lname = ucfirst($Lname);
$Address = ucfirst($Address);

$Fname = addslashes($Fname);
$Mname = addslashes($Mname);
$Lname = addslashes($Lname);
$Address = addslashes($Address);
$user = addslashes($user);
if ($oldpass == $new_pass) {
	$Password = $new_pass;
}else{
$Password = password_hash($new_pass, PASSWORD_DEFAULT);
}



 $sql = mysqli_query($connect, "UPDATE `user` SET `FirstName`='$Fname',`MiddleName`='$Mname',`LastName`='$Lname',`Gender`='$gender',`City`='$City',`Barangay`='$barangay',`Address`='$Address',`Contact`='$Mobile',`Email`='$Email',`UserName`='$user',`Password`='$Password' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>