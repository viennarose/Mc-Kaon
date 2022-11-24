<?php
include'db/session.php';
$connect = new PDO("mysql:host=localhost;dbname=elraogsz_ordering", "elraogsz_ordering", "WkTEyekYnnS;");
$mydid = $users['id'];
try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT reservation.*,rooms.name FROM `reservation` inner join rooms on reservation.room_id = rooms.id where user_id='$mydid'");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    
    if($row['Status'] == 'Approved'){
    $actionLink = '
   
    
        <a href="Pay_reservation_now.php?&id='.$row['id'].'" target="_blank" class="x-getpaid-button float-right"><img src="https://getpaid.gcash.com/assets/img/paynow.png"></a>
    ';    
    }elseif($row['Status'] == 'Decline'){
       $actionLink = ' Room is Not Available on this Date and Time';  
    }else{
       $actionLink = 'On Process';  
        
    }



$Time =     date("h:i: A", strtotime($row['time'])); 




 $output['data'][] = [

  $row['name'],
 $row['date'],
$Time,
$row['Status'],
$row['down_payment'],
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



