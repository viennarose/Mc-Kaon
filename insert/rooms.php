<?php
 include'../db/session.php';

$Room = $_POST['Room'];

$Rate = $_POST['Rate'];

$Person = $_POST['Person'];

$description = $_POST['description'];


$filename = $_FILES['file']['name'];

$Room = ucwords($Room);
     
    

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);





$sql = "INSERT INTO `rooms`(`rooms`, `rate`, `max_person`, `photo`, `Description`) VALUES('$Room','$Rate','$Person','$filename','$description')";


  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($conn);
?>