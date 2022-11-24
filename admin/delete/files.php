<?php
$servername = "localhost";
  $username = "root";
  $password = "";
  $db="file_backup";

  $conn = mysqli_connect($servername, $username, $password,$db);

if(isset($_POST["id"]))
{
$id = $_POST['id'];
 
  
    $sql ="UPDATE `uploaded_file` SET `archived`='1' WHERE `id` = '$id'";
  if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
  } 
  else {
    echo json_encode(array("statusCode"=>201));
  }
  mysqli_close($conn);
 
}




?>