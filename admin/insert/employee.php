<?php
 include'../db/session.php';







$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$ext = $_POST['ext'];
$Sex = $_POST['Sex'];
$Position = $_POST['Position'];
$Contact_number = $_POST['Contact_number'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Started = $_POST['Started'];

$lname = ucfirst($lname);
$fname = ucfirst($fname);
$mname = ucfirst($mname);
$Address = ucfirst($Address);


$lname = addslashes($lname);
$fname = addslashes($fname);
$mname = addslashes($mname);
$Address = addslashes($Address);
$Email = addslashes($Email);
$Contact_number = addslashes($Contact_number);

$filename = $_FILES['file']['name'];

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);


if($ext == '' or $ext =='none' or $ext =='N/A' or $ext == 'None'){
$myext == ' ';
}else{
$myext = $ext;
}
if ($filename == '') {

	
	
$files = 'profile.jpg';

}else{
$files = $filename;
}


 $sql = mysqli_query($connect, "INSERT INTO `employee_info`(`First_Name`, `Middle_name`, `Last_Name`, `extension`, `address`, `contact_Number`, `Email_address`, `Position`, `Photo`, `Gender`, `Date_started`) 
 	VALUES ('$fname','$mname','$lname','$myext','$Address','$Contact_number','$Email','$Position','$files','$Sex','$Started')");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>