<?php

include'../db/connect.php';
                  
$count_available = mysqli_query($connect, "SELECT Distinct order_number FROM customer_order WHERE status = '1'");

$total_available_car = mysqli_num_rows($count_available);

echo  $total_available_car;
?>