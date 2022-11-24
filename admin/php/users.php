<?php
include'../db/session.php';
   
    $unique_id = $user['id'];
    $sql = "SELECT * FROM user WHERE NOT id = '$unique_id' ORDER BY id DESC";
    $query = mysqli_query($connect, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>