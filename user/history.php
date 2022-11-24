<?php
include'db/session.php';
$mydid = $users['id'];
//fetch.php
include'db/pdo.php';


try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT menu.name, orders.*  FROM `orders` inner Join menu on orders.Menu_id = menu.id Where orders.Customer_id = '$mydid' AND orders.status Not in('Cart') ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
        $i++;
     $Time =     date("h:i: A", strtotime($row['date'])); 
     $date =     date("Y-m-d", strtotime($row['date'])); 
 $dates = $date.'-'.$Time;
     $output['data'][] = [ 
         $row['Order_id'],
      $row['name'],
      $row['Menu_Price'],
       $row['Menu_QTY'],
       $row['Total_Price'],
       $dates
        ];
         
    }
  
    $global_ = null;
    echo json_encode($output);

    return true;
} catch (PDOException $e) {
    $global_ = null;
    echo "Something went wrong. Please contact system administrator.";

}



