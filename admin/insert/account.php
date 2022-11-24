    <?php
 include'../db/session.php';


$First_name = $_POST['First_name'];
$Middle_name = $_POST['Middle_name'];
$LastName = $_POST['LastName'];
$Role = $_POST['Role'];
$Username = $_POST['Username'];



$First_name = ucfirst($First_name);
$Middle_name = ucfirst($Middle_name);
$LastName = ucfirst($LastName);

$First_name = addslashes($First_name);
$Middle_name = addslashes($Middle_name);
$LastName = addslashes($LastName);

$Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

 $sql = mysqli_query($connect, "INSERT INTO `account`(`First_name`, `Middle_name`, `LastName`, `Account_Type`, `Username`, `Password`, `Photo`) VALUES ('$First_name','$Middle_name','$LastName','$Role','$Username','$Password','profile.jpg')");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>