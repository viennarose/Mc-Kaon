<?php
 include'../db/session.php';

    $unique_id = $user['unique_id'];
    $searchTerm = mysqli_real_escape_string($connect, $_POST['searchTerm']);

    $sql = "SELECT * FROM user WHERE NOT unique_id = {$unique_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>