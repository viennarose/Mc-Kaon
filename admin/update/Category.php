<?php
include'../db/session.php';









$id = $_POST['id'];
$Names = $_POST['Names'];


$Names = ucwords($Names);

$Names = addslashes($Names);


 $sql = mysqli_query($connect, "UPDATE `category` SET `Category`='$Names' WHERE `id`='$id'");

 
  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }

 mysqli_close($connect);
?>
