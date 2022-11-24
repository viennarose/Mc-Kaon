<?php
$myid = '1';
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$myid}
                OR outgoing_msg_id = {$myid}) AND (outgoing_msg_id = {$unique_id} 
                OR incoming_msg_id = {$unique_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($connect, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($unique_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($unique_id == $row['id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '

        <a  href="chat.php?user_id='. $row['id'] .'" class="dropdown-item">
                    <div class="media">
                      <img src="../images/'. $row['Photo'] .'" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                <h3 class="dropdown-item-title">
                        '. $row['LastName'] .'
                        <span class="float-right text-sm  status-dot '. $offline .'"><i class="fas fa-circle"></i></span>
                         </h3>
                        <p class="text-sm">'. $you . $msg .'</p>
                         
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> '.$row['status'].'</p>
                   </div>
            </div>
         
          </a>
          <div class="dropdown-divider"></div>
 <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          ';
    }
?>

       