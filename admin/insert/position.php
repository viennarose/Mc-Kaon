<?php
 include'../db/session.php';


$Name = $_POST['Name'];
$Rate = $_POST['Rate'];

$Name = ucfirst($Name);

$Name = addslashes($Name);

 $sql = mysqli_query($connect, "INSERT INTO `position`(`position`, `salary`) 
 	VALUES ('$Name','$Rate')");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>