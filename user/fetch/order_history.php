<?php

include'../db/pdo.php';


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT DISTINCT customer_order.order_number,customer_order.status  FROM `customer_order` Where customer_order.status Not IN('0', '1') ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    $actionLink = '
   
    
          <a href="view_order_history.php?id='.$row['order_number'].'" class="btn btn-primary btn-sm" ><i class="fas fa-eye icon" ></i> View</a>
          
    ';    
  
if($row['status'] == '2'){
$status = '<span class="right badge badge-success" style="font-size:16px; padding: 6px 6px 6px 6px;" id="order">Approved</span>';
}else{
  $status = ' <span class="right badge badge-danger" style="font-size:16px; padding: 6px 10px 6px 10px;" id="order">Denied</span>';
}
 $output['data'][] = [
 
  $row['order_number'],
$status,
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



