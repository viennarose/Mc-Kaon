<?php
 include'../db/session.php';

$id = $_POST['ids'];
$Name = $_POST['Names'];
$Rates = $_POST['Rates'];




$Name = ucfirst($Name);

$Name = addslashes($Name);

 $sql = mysqli_query($connect, "UPDATE `position` SET `position`='$Name',`salary`='$Rates' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>