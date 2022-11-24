<?php
include'../db/connect.php';


$move_id = $_POST['move_id'];

$Quantity = $_POST['Quantity'];
$id = $_POST['userid'];


$get_sched = mysqli_query($connect, "SELECT `id`, `name`, `qty`, `price`, `description`, `category`, `photo`, `expenses`,`size` FROM `menu` where id = '$move_id' and size='Small'");

 while($row = $get_sched->fetch_assoc())          {
	$price = $row['price'];
		$expenses = $row['expenses'];
	$total_price = $price * $Quantity;
$expensesss = $expenses * $Quantity;
$size = $row['size'];
}

$date = date('Y-m-d G:i:s');

$sql = "INSERT INTO `orders`(`Order_id`, `Menu_id`, `Menu_Price`, `Menu_QTY`, `Total_Price`, `Payment_status`, `status`, `Customer_id`,`total_expense`, `date`,`size`) VALUES ('00000','$move_id','$price','$Quantity','$total_price','N/A','Cart','$id','$expensesss','$date','$size')";



  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>