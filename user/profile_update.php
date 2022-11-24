<?php
include'db/session.php';
$id = $users['id'];

               
$count_available = mysqli_query($connect, "SELECT * FROM `user` WHERE (Email='' or Address='' or Contact='' or City='' or Barangay='' or FirstName='' or LastName='') and id = '$id'");

$total_available_car = mysqli_num_rows($count_available);

echo  $total_available_car;
?>
 