<?php
include'../db/session.php';










$Restaurant_name = $_POST['Restaurant_name'];
$Address = $_POST['Address'];
$Contact_info = $_POST['Contact_info'];
$Tel = $_POST['Tel'];
$Email = $_POST['Email'];
$Hrs = $_POST['Hrs'];
$About = $_POST['About'];
$Moto = $_POST['Moto'];
$Offers = $_POST['Offers'];
$Rooms = $_POST['Rooms'];

$filename = $_FILES['file']['name'];
$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);

if ($filename == '') {

	
	
$files = $_POST['logos'];

}else{
$files = $filename;
}

$Restaurant_name = ucwords($Restaurant_name);
$Address = ucwords($Address);
$About = ucwords($About);
$Moto = ucwords($Moto);
$Offers = ucwords($Offers);
$Rooms = ucwords($Rooms);

$Restaurant_name = addslashes($Restaurant_name);
$Address = addslashes($Address);
$About = addslashes($About);
$Moto = addslashes($Moto);
$Offers = addslashes($Offers);
$Rooms = addslashes($Rooms);

$Hrs = addslashes($Hrs);
$Email = addslashes($Email);
$Tel = addslashes($Tel);
$Contact_info = addslashes($Contact_info);

 $sql = mysqli_query($connect, "UPDATE `details` SET `Restaurant_name`='$Restaurant_name',`Address`='$Address',
 	`Contact_info`='$Contact_info',`Tel`='$Tel',`Email`='$Email',`Hrs`='$Hrs',`Moto`='$Moto',`About`='$About',
 	`Offers`='$Offers',`Rooms`='$Rooms',`Logo`='$files' WHERE `id`='1'");

 
  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }

 mysqli_close($connect);
?>
