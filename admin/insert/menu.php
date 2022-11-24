<?php
 include'../db/session.php';


$Name = $_POST['Name'];
$Price = $_POST['Price'];
$qty = $_POST['qty'];
$expenses = $_POST['expenses'];
$category = $_POST['category'];
$Decription = $_POST['Decription'];

$Size = $_POST['Size'];

$Decription = ucfirst($Decription);

$Decription = addslashes($Decription);


$filename = $_FILES['file']['name'];

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);


$Name = ucfirst($Name);

$Name = addslashes($Name);
$sqlssss = mysqli_query($connect, "select * from menu order by id DESC limit 1");
   while($get_sched_now =$sqlssss->fetch_assoc())          {
$total_id = ($get_sched_now['id'] + 1);
}
 $sql = mysqli_query($connect, "INSERT INTO `menu`(`name`, `qty`, `price`, `description`, `category`, `photo`, `expenses`,`status`,`size`) 
 	VALUES ('$Name','$qty','$Price','$Decription','$category','$filename','$expenses','0','$Size')");


  if ($sql==true) {
      $sql1 = mysqli_query($connect, "INSERT INTO `orders`(`Order_id`, `Menu_id`, `Menu_Price`, `Menu_QTY`, `Total_Price`, `Payment_status`, `status`, `Customer_id`) VALUES ('0','$total_id','$Price','0','0','N/A','delivered','0')");
  }if($sql1==true){
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>