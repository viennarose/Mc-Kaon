<?php
include'../db/pdo.php';

try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT menu.name,SUM(orders.Total_Price) as menutotal,menu.expenses ,Sum(orders.Menu_QTY) as qty,menu.price,menu.expenses  FROM `orders` inner join menu on orders.Menu_id = menu.id where orders.status Not In('Cart') and menu.status ='0' Group By menu.id");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
     $qty = $row["qty"];
$expenses = $row["expenses"];
$expense = ($expenses*$qty);
$total =  ($row["menutotal"] - $expense);


 $output['data'][] = [
  
$row["name"],
$row["price"],
 $row["expenses"],
 $row["qty"],
 $total
        ];
         
    }
  


    $global_ = null;
    echo json_encode($output);

 return true;
} catch (PDOException $e) {
    $global_ = null;
    echo "Something went wrong. Please contact system administrator.";

}



