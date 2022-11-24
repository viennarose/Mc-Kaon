<?php
 include'../db/session.php';


$category = $_POST['Name'];




$category = ucfirst($category);

$category = addslashes($category);

 $sql = mysqli_query($connect, "INSERT INTO `category`(`Category`) VALUES ('$category')");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>