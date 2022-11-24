<?php
 include'../db/session.php';


$Name = $_POST['Name'];
$Price = $_POST['Price'];

$Decription = $_POST['Decription'];



$Decription = ucfirst($Decription);

$Decription = addslashes($Decription);


$filename = $_FILES['file']['name'];

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);


$Name = ucfirst($Name);

$Name = addslashes($Name);

 $sql = mysqli_query($connect, "INSERT INTO `rooms`(`name`, `description`, `price`, `photo`) 
 	VALUES ('$Name','$Decription','$Price','$filename')");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>