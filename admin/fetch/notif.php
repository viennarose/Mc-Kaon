<?php

include'../db/connect.php';
if(isset($_POST["view"]))
{
 
 $query = "SELECT * FROM notification Order By date desc";
 $result = mysqli_query($connect, $query);
 $output = '';

 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {

 $date = date("F d, Y H:i a", strtotime($row['date']));

    if ($row["status"] == 'Pending') {
      $mystats = 'Unseen';
    }else{
      $mystats = 'Seen';
    }
   $output .= '
   <li>
  
          <a href="order_notif.php?&id='.$row['user_id'].'" class="dropdown-item mydrop">
            <i class="fas fa-book-reader"></i> '.$row["message"].'
        <br>
         <span class=" text-muted text-sm" style="margin-left:5px;">'.$mystats.'</span>
          <span class=" text-muted text-sm" style="margin-left:5px;">'.$date.'</span>
          </a>
          <div class="dropdown-divider"></div>
     
</li>
   ';
  }
 }

 
 $query_1 = "SELECT * FROM notification where status = 'Pending'";
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
