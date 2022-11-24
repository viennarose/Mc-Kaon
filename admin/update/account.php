    <?php
 include'../db/session.php';

$id = $_POST['id'];
$First_name = $_POST['First_name_'];
$Middle_name = $_POST['Middle_name_'];
$LastName = $_POST['LastName_'];
$Role = $_POST['Role_'];
$Username = $_POST['Username_'];
$oldpass = $_POST['oldpass'];


$First_name = ucfirst($First_name);
$Middle_name = ucfirst($Middle_name);
$LastName = ucfirst($LastName);

$First_name = addslashes($First_name);
$Middle_name = addslashes($Middle_name);
$LastName = addslashes($LastName);
if ($_POST['Password_'] == $oldpass) {

$Password = $oldpass;

}else{
	$Password = password_hash($_POST['Password_'], PASSWORD_DEFAULT);
}
 $sql = mysqli_query($connect, "UPDATE `account` SET `First_name`='$First_name',`Middle_name`='$Middle_name',`LastName`='$LastName',`Account_Type`='$Role',`Username`='$Username',`Password`='$Password' WHERE `id`='$id'");


  if ($sql==true) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>