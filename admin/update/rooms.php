<?php
 include'../db/session.php';

$id = $_POST['ids'];
$Name = $_POST['Names'];
$Price = $_POST['Prices'];
$Decription = $_POST['Decriptions'];







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

 $sql = mysqli_query($connect, "UPDATE `rooms` SET `name`='$Name',`price`='$Price',`description`='$Decription',`photo`='$files' WHERE id = '$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>