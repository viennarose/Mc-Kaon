<?php
include'../db/pdo.php';

try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT category.Category,menu.name,menu.size,Sum(orders.Menu_QTY) as best_seller FROM `orders` inner JOIN menu on orders.Menu_id = menu.id INNER join category on menu.category = category.id WHERE orders.status NOT IN('Cart') and menu.status ='0' Group by orders.Menu_id");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
    $i++;
    



$menu = $row["name"].' <span>'.$row["size"].'</span>';
 $output['data'][] = [
  
$row["Category"],
$menu,
 $row["best_seller"]
        ];
         
    }
  


    $global_ = null;
    echo json_encode($output);

 return true;
} catch (PDOException $e) {
    $global_ = null;
    echo "Something went wrong. Please contact system administrator.";

}



