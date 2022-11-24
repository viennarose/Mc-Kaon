<?php
 include'../db/session.php';


$Name = $_POST['Name'];

$Middle = $_POST['Middle'];

$Last = $_POST['Last'];

$Gender = $_POST['Gender'];


$filename = $_FILES['file']['name'];

$Address = $_POST['Address'];

$Contact = $_POST['Contact'];

$dob = $_POST['dob'];

$Position = $_POST['Position'];

$Hired = $_POST['Hired'];

$filename = $_FILES['file']['name'];

$Name = ucwords($Name);
$Middle = ucwords($Middle);
$Last = ucwords($Last);
$Address = ucwords($Address);
     
    

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../personel_image/';
move_uploaded_file($filetmpname, $folder.$filename);



$Password =password_hash($Password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `personel`(`firstname`, `middlename`, `lastname`, `gender`, `dob`, `address`, `contact_number`, `position`, `date_hired`, `picture`) VALUES ('$Name','$Middle','$Last','$Gender','$dob','$Address','$Contact','$Position','$Hired','$filename')";


  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($conn);
?>