<?php
 include'../db/session.php';

$id = $_POST['ids'];
$Name = $_POST['Names'];
$Price = $_POST['Prices'];
$qty = $_POST['qtys'];
$expenses = $_POST['expensess'];
$Decription = $_POST['Decriptions'];

$category_ = $_POST['category_'];





$Decription = ucfirst($Decription);

$Decription = addslashes($Decription);


$filename = $_FILES['file']['name'];

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);
if ($filename == '') {

	
	
$files = $_POST['myphoto'];

}else{
$files = $filename;
}


$Name = ucfirst($Name);

$Name = addslashes($Name);

 $sql = mysqli_query($connect, "UPDATE `menu` SET `name`='$Name',`qty`='$qty',`price`='$Price',`description`='$Decription',`photo`='$files',`expenses`='$expenses',`category`='$category_' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>