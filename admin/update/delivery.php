<?php
 include'../db/session.php';

$id = $_POST['ids'];
$Delivery = $_POST['Delivery'];


 $sql = mysqli_query($connect, "UPDATE `delivery_fee` SET `Fee`='$Delivery' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>