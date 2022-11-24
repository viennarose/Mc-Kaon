<?php
 include'../db/session.php';





$Name = $_POST['Name'];

$Price = $_POST['Price'];

$Expense = $_POST['Expense'];

$QTy = $_POST['QTy'];


$filename = $_FILES['file']['name'];

$Name = ucwords($Name);
     
    

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);





$sql = "INSERT INTO `menu`(`name`, `price`, `expense`, `qty`, `picture`) VALUES('$Name','$Price','$Expense','$QTy','$filename')";


  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($conn);
?>