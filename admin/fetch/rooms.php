<?php
include'../db/pdo.php';

try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT `id`, `name`, `description`, `price`, `photo`, `date` FROM `rooms`");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    
 $actionLink = '
   
   
      <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#update_rooms" onclick="update('.$row['id'].')"><i class="fas fa-edit icon" ></i></button>
  <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-default  Delete btn-sm"><i class="fas fa-trash-alt icon"></i></button>
    ';   

$image = '';
 if($row["photo"] != '')
 {
  $image = '<img src="../images/'.$row["photo"].'" class="img-thumbnail"  style="width:80px; height: 80px;"  />';
 }

 else
 {
  $image = '<img src="../images/profile.jpg" class="img-thumbnail" width="100" height="25"  />';
 }



 $output['data'][] = [
    $image,
$row["name"],
 $row["description"],
$row["price"],

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



