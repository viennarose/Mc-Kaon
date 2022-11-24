<?php

 include'../db/connect.php';

          $incoming_id = '1';
        $outgoing_id = $_POST['incoming_id'];
        $message = $_POST['message'];


$sql = mysqli_query($connect, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, remarks) VALUES ('$incoming_id', '$outgoing_id', '$message', '0')") ;


  if ($sql==true) {
     echo json_encode(array("statusCode"=>200));
   }
  else {
    echo json_encode(array("statusCode"=>201));
  }


 mysqli_close($connect);
?>