<?php
include'../db/pdo.php';

try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT employee_info.*,position.position FROM `employee_info` Inner Join position on employee_info.Position = position.id ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    
 $actionLink = '
   
   
      <a href="edit_employee?&id='.$row['id'].'" class="btn btn-default btn-sm"><i class="fas fa-edit icon" ></i></a>
  <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-default  Delete btn-sm"><i class="fas fa-trash-alt icon"></i></button>
    ';   

$image = '';
 if($row["Photo"] != '')
 {
  $image = '<img src="../images/'.$row["Photo"].'" class="img-thumbnail"  style="width:80px; height: 80px;"  />';
 }

 else
 {
  $image = '<img src="../images/profile.jpg" class="img-thumbnail" width="100" height="25"  />';
 }
if ($row["extension"] == 'N/A') {
 $extension = '';
}else{
  $extension = $row["extension"];
}
$fullname = $row["Last_Name"].', '.$row["First_Name"].' '.$row["Middle_name"].'. '.$extension;

 $output['data'][] = [
    $image,
$fullname,
 $row["contact_Number"],
$row["position"],

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



