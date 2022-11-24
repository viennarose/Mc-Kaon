<?php
 include'db/connect.php';

$qrcoding = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 $generate = substr(str_shuffle($qrcoding),0,8);

$id = $_GET['id'];

$amount = $_GET['amount'];
 $sql = mysqli_query($connect, "UPDATE `reservation` SET `Status`='onprocess',`down_payment`='$amount' WHERE id = '$id'");


 
   if ($sql==true) {
 	header("location:home");
  } 

?>