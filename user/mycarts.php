<?php
include'db/session.php';
$id = $users['id'];

               
$count_available = mysqli_query($connect, "SELECT * FROM `orders` WHERE status='Cart' and Customer_id = '$id'");

$total_available_car = mysqli_num_rows($count_available);

echo  $total_available_car;
?>
 