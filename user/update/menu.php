<?php
 include'../db/connect.php';

$id = $_POST['id'];
$Names = $_POST['Names'];
$Prices = $_POST['Prices'];
$Expenses = $_POST['Expenses'];
$QTys = $_POST['QTys'];



$Names = strtoupper($Names);







 $sql = mysqli_query($connect, "UPDATE `menu` SET `name`='$Names',`price`='$Prices',`expense`='$Expenses',`qty`='$QTys' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($conn);
?>