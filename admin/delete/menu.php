<?php
include'../db/session.php';

if(isset($_POST["id"]))
{
$id = $_POST['id'];
 

    $sql ="UPDATE menu SET status='1' WHERE `id` = '$id'";
  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }
  mysqli_close($connect);
 
}




?>