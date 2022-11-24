<?php

include'../db/pdo.php';


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT menu.id,menu.name, menu.qty - SUM(orders.Menu_QTY) as Remaining FROM orders LEFT JOIN menu on orders.Menu_id = menu.id where orders.status ='delivered' and menu.status ='0' GROUP By orders.Menu_id");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    $actionLink = '
   
    
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#update_admin" onclick="update('.$row['id'].')"><i class="fas fa-edit icon" ></i> Update Stock</button>
          
    ';    


 $output['data'][] = [
  $row['name'],
 $row['Remaining'],
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



