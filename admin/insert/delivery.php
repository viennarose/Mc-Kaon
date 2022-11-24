<?php
 include'../db/session.php';


$City = $_POST['City'];
$Fee = $_POST['Fee'];



 $sql = mysqli_query($connect, "INSERT INTO `delivery_fee`(`City`, `Fee`) 
 	VALUES ('$City','$Fee')");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>