<?php
 include'../db/connect.php';

$id = $_POST['move_id'];
$Quantity = $_POST['Quantity'];
$menu_id = $_POST['menu_id'];
$name = $_POST['name'];
$mysize_ = $_POST['mysize_'];
$get_sched = mysqli_query($connect, "SELECT * FROM `menu` where name = '$name' and size='$mysize_'");

 while($row = $get_sched->fetch_assoc())          {
	$price = $row['price'];
		$expenses = $row['expenses'];
	$total_price = $price * $Quantity;
$size = $row['size'];
$menuid = $row['id'];

$expensesss = $expenses * $Quantity;
}





 $sql = mysqli_query($connect, "UPDATE `orders` SET `Menu_id`='$menuid',`Menu_QTY`='$Quantity',`Menu_Price`='$price',`Total_Price`='$total_price',`size`='$mysize_',`total_expense`='$expensesss' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($conn);
?>