<?php
include'../db/pdo.php';

try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT reservation.*,rooms.name,user.FirstName,user.MiddleName,user.LastName FROM `reservation` inner join rooms on reservation.room_id = rooms.id inner join user on reservation.user_id = user.id WHERE reservation.Status = 'Pending'");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    
 $actionLink = '

  <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-primary  Delete btn-sm">approved</button>
   <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger  Decline btn-sm">Decline</button>
    ';   


$fullname = $row["LastName"].', '.$row["FirstName"].' '.$row["MiddleName"];
 $Time =     date("h:i: A", strtotime($row['time'])); 

 $output['data'][] = [
    $fullname,
$row["name"],
 $row["date"],
$Time,
$row["Status"],
$row["down_payment"],
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



