<?php
include'../db/session.php';


$id = $_POST['id'];
 
  
    $sql ="UPDATE `orders` SET `status`='deliver' WHERE `Order_id`='$id'";
  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }
  mysqli_close($connect);
 





?>