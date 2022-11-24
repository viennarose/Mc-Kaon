<?php
include'db/session.php';
$myids = $myid;
$connect = mysqli_connect("localhost", "elraogsz_ordering", "WkTEyekYnnS;", "elraogsz_ordering");
if(isset($_POST["view"]))
{
 $datess = date("y-m-d");
 $query = "SELECT * FROM `orders` WHERE date(date)='$datess' and (`status`='ordered' or `status`='deliver') and Customer_id='$myids' Group By Order_id";
 $result = mysqli_query($connect, $query);
 $output = '';

 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {

 $date = date("F d, Y H:i a", strtotime($row['date']));

   $output .= '
   <li>
  
          <a href="onprocess" class="dropdown-item mydrop">
            <i class="fas fa-book-reader"></i> '.$row["Order_id"].'
        <br>
        
          <span class=" text-muted text-sm" style="margin-left:5px;">'.$date.'</span>
          </a>
          <div class="dropdown-divider"></div>
     
</li>
   ';
  }
 }

 
 $query_1 = "SELECT * FROM `orders` WHERE date(date)='$datess' and (`status`='ordered' or `status`='deliver') and Customer_id='$myids' Group By Order_id";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $mycount = "$count Notification";
 if($count > 0){
      $sound = "yes";
 }else{
     $sound = "no"; 
 }
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count,
  'total' => $mycount,
  'sound' => $sound
 );
 echo json_encode($data);
}
?> 
