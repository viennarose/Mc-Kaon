<?php

$connect = new PDO("mysql:host=localhost;dbname=elraogsz_ordering", "elraogsz_ordering", "WkTEyekYnnS;");


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT DISTINCT order_number  FROM `customer_order` Where status ='1' ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    $actionLink = '
   
    
          <a href="view_order.php?id='.$row['order_number'].'" class="btn btn-primary btn-sm" ><i class="fas fa-eye icon" ></i> View</a>
          
    ';    
  

 $output['data'][] = [
 
  $row['order_number'],

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



