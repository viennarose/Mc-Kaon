<?php

$connect = new PDO("mysql:host=localhost;dbname=elraogsz_ordering", "elraogsz_ordering", "WkTEyekYnnS;");


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT `id`, `rooms`, `rate`, `max_person`, `photo`, `Description` FROM `rooms`");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    $actionLink = '
   
    
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#update_admin" onclick="update('.$row['id'].')"><i class="fas fa-edit icon" ></i></button>
          <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger  Delete btn-sm"><i class="fas fa-trash"></i></button>
    ';    
   $image = '';
 if($row["photo"] != '')
 {
  $image = '<img src="../images/'.$row["photo"].'" class="img-thumbnail"  style="width:80px; height: 80px;"  />';
 }

 else
 {
  $image = '<img src="images/No_image_available.png" class="img-thumbnail" width="100" height="25"  />';
 }

 $output['data'][] = [
 $image, 
  $row['rooms'],
 $row['rate'],
  $row['max_person'],
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



