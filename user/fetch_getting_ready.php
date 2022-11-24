<?php
include 'db/session.php'; 

 $id = $users['id'];





$output = '';
 $datess = date("y-m-d");
  $sqls = "SELECT Distinct status FROM `orders` WHERE Customer_id = '$id' and status Not in ('Cart', 'Done') and date(date) ='$datess' ";
 
  $queryss = $connect->query($sqls);
   while($rows = $queryss->fetch_assoc()){
  
if($rows['status'] == 'ordered'){
  $image = '<img src="inkitchen.gif" width="350" style="width: auto; max-width: 300px; height: auto;">';
  $Waiting = 'Your order is in the kitchen Please wait fo 15min';
$percentage_vote = '50';
}elseif($rows['status'] == 'deliver'){
 $image = '<img src="rider.gif" width="350" style="width: auto; max-width: 300px; height: auto;">';
 $Waiting = 'Rider is on your way<br>Please wait for few min.';
$percentage_vote = '100';
}
elseif($rows['status'] == 'delivered'){
 $image = '';
 $Waiting = 'Thank You ! And Enjoy Your Food ';
$percentage_vote = '100';
}
else{
 $image = '';
 $Waiting = 'No Transaction Found';
$percentage_vote = '100';
}
  $output .= '

'.$image.'
  <br>
<label style="font-size:18px; font-weight:bold;">'.$Waiting.'</label>
  
   
     
 <br>
  ';
 }


echo $output;


?>