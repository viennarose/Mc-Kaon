<?php
  $hostname = "localhost";
  $username = "mdccapst_mc-kaon";
  $password = "ilovemckaon";
  $dbname = "mdccapst_mc-kaon";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
