<?php 

 include'../db/connect.php';

 $photo = $_POST['photo'];
  $incoming_id = $_POST['incoming_id'];
 $SQLs = mysqli_query($connect, "UPDATE `messages` SET `remarks`='1' WHERE incoming_msg_id ='$incoming_id' ");



      
        $output = "";
        
$sql = mysqli_query($connect, "SELECT * FROM `messages`  WHERE (incoming_msg_id = '1' AND outgoing_msg_id = '$incoming_id') OR (incoming_msg_id = '$incoming_id' AND outgoing_msg_id = '1') ORDER BY msg_id ");
if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
               
               if($row['outgoing_msg_id'] === $incoming_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="../images/'.$photo.'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }

        echo "$output";
   

?>
  