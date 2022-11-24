<?php
include'../db/session.php';

$id = $_POST['id'];

$Add_Quantity = $_POST['Add_Quantity'];
$QTys = $_POST['QTYS'];

$add = $QTys + $Add_Quantity ;








 $sql = mysqli_query($connect, "UPDATE `menu` SET `qty`='$add' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($conn);
?>