<?php
$conn = mysqli_connect('localhost','root','','restaurant');

if(isset($_POST["id"]))
{
$id = $_POST['id'];
 
  
    $sql ="DELETE FROM `menu` WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }
  mysqli_close($conn);
 
}




?>