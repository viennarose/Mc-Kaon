<?php
 $connect = mysqli_connect('localhost','root','','restaurant');


$move_id = $_POST['move_id'];

$Quantity = $_POST['Quantity'];
$id = $_POST['userid'];


$get_sched = mysqli_query($connect, "SELECT * FROM `menu` where id = '$move_id'");

 while($row = $get_sched->fetch_assoc())          {
	$price = $row['price'];
	$total_price = $price * $Quantity;

}



$sql = "INSERT INTO `customer_order`(`order_number`, `Name`, `Quantity`, `customer_id`, `status`,`total_price`,`price`) VALUES ('0','$move_id','$Quantity','$id','0','$total_price','$price')";



  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>