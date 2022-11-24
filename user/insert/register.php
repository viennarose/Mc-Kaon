<?php
 $connect = mysqli_connect('localhost','root','','restaurant');


$Fullname = $_POST['Fullname'];

$Contact = $_POST['Contact'];

$Email = $_POST['Email'];



$Username = $_POST['Username'];

$Address = $_POST['Address'];



$Fullname = ucwords($Fullname);
$Address = ucwords($Address);

     
    $Fullname = addslashes($Fullname);
$Address = addslashes($Address);


$password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO `user`(`name`, `email`, `token_id`, `Address`, `contact_Number`, `username`, `password`) VALUES ('$Fullname','$Email','N/A','$Address','$Contact','$Username','$password')";


  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>