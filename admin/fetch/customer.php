<?php
include'../db/pdo.php';


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT * FROM `user`");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    





$fullname = ''.$row['LastName'].', '.$row['FirstName']. ' '.$row['MiddleName'].'. ';
$image = '';
 if($row["Photo"] != '')
 {
  $image = '<img src="../images/'.$row["Photo"].'" class="img-thumbnail"  style="width:80px; height: 80px;"  />';
 }

 else
 {
  $image = '<img src="../images/profile.jpg" class="img-thumbnail" width="100" height="25"  />';
 }

 $output['data'][] = [
 $image, 
$row["token"],
 $fullname,
 $row["Contact"]
        ];
         
    }
  


    $global_ = null;
    echo json_encode($output);

 return true;
} catch (PDOException $e) {
    $global_ = null;
    echo "Something went wrong. Please contact system administrator.";

}



