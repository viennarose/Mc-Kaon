<?php
include'../db/pdo.php';

try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT `id`, `position`, `salary`, `date` FROM `position`");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    
 $actionLink = '
   
   
      <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#update_rooms" onclick="update('.$row['id'].')"><i class="fas fa-edit icon" ></i></button>
  <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-default  Delete btn-sm"><i class="fas fa-trash-alt icon"></i></button>
    ';   



 $output['data'][] = [

 $row["position"],
$row["salary"],

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



