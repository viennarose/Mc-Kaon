<?php
 include'../db/connect.php';

$qrcoding = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 $generate = substr(str_shuffle($qrcoding),0,8);

$id = $_POST['id'];


 $sql = mysqli_query($connect, "UPDATE `orders` SET `status`='ordered',`Order_id`='$generate',`Payment_status`='COD' WHERE Customer_id = '$id' and status='Cart'");


  if ($sql==true) {
     $sql1 = mysqli_query($connect, "INSERT INTO `notification`(`user_id`, `message`, `status`) VALUES ('$generate','New Order','Pending')");
  } 
   if ($sql1==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($conn);
?>