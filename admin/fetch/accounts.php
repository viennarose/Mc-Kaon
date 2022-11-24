<?php
include'../db/pdo.php';


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT `id`, `First_name`, `Middle_name`, `LastName`, `Account_Type`, `Username`, `Password`, `Photo`, `Date` FROM `account` ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    $actionLink = '
   
     <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#edit" onclick="update('.$row['id'].')"><i class="fas fa-edit icon" ></i></button>
          <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger  Delete btn-sm"><i class="fas fa-trash"></i></button>
    ';    

$fullname = $row["LastName"].', '.$row["First_name"].' '.$row["Middle_name"].'.';
 $output['data'][] = [

 $fullname,
   $row['Account_Type'],
     $actionLink
        ];

         
    }
  
    $global_ = null;
    echo json_encode($output);

 return true;
} catch (PDOException $e) {
    $global_ = null;
    echo "Something went wrong. Please contact system administrator.";

}



