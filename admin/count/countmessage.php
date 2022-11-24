<?php
include'../db/session.php';

                  

$count_message = mysqli_query($connect, "SELECT Count(*) as total FROM `messages` WHERE `incoming_msg_id`='$id' AND Remarks ='0'");
                         
                          while($count_message_now =$count_message->fetch_assoc())          {


                    
                      $messages = $count_message_now['total'];
                    
                   }


echo  $messages;
?>