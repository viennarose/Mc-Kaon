<?php

include'../db/pdo.php';


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT user.FirstName, user.LastName, user.MiddleName, orders.Order_id, orders.Menu_id, SUM(orders.Total_Price) as Total FROM orders Inner JOIN user on orders.Customer_id = user.id Where orders.status Not in('Cart') GROUP By orders.Order_id ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    $actionLink = '
   
     <a href="order_done_notif?&id='.$row['Order_id'].'" class="btn btn-default btn-sm"><i class="fas fa-eye" ></i> view</a>
      
          
    ';    

$fullname = $row["LastName"].', '.$row["FirstName"].' '.$row["MiddleName"].'.';

 $output['data'][] = [
  $row['Order_id'],
 $fullname,
   $row['Total'],
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



