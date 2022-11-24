<?php
include'../db/connect.php';


$move_id = $_POST['move_id'];

$Person = $_POST['Person'];
$id = $_POST['userid'];
$date = $_POST['date'];
$time = $_POST['time'];

$get_sched = mysqli_query($connect, "SELECT `id`, `name`, `description`, `price`, `photo`, `date` FROM `rooms` where id = '$move_id'");

 while($row = $get_sched->fetch_assoc())          {
	$price = $row['price'];

}


$sql = "INSERT INTO `reservation`(`user_id`, `date`, `time`, `room_id`, `Status`, `Price`, `Customers`,`down_payment`) VALUES ('$id','$date','$time','$move_id','Pending','$price','$Person','0')";



  if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>