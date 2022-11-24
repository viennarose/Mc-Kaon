<?php
include'db/session.php';
include'db/pdo.php';
$mydid = $users['id'];
//fetch.php



try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $connect->query("SELECT menu.name, menu.photo, orders.*  FROM `orders` inner Join menu on orders.Menu_id = menu.id Where orders.Customer_id = '$mydid' AND orders.status ='ordered' ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
        $i++;
        $actionLink = '
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#Move" style="padding:6px 6px 6px 6px; font-size:16px;" onclick="update('.$row['id'].')"><i class="fas fa-edit icon" ></i> Edit</button>
          <button type="button" name="delete" id="'.$row["id"].'" style="padding:6px 6px 6px 6px; font-size:16px;" class="btn btn-danger  Delete btn-sm"><i class="fas fa-trash"></i> Remove</button>
        ';
  $Quantity = $row['Menu_QTY'];
            



              $price = $row['Menu_Price'];
               $prices = '<span style="font-size:16px; float:right;">'.$row['Menu_Price'].'</span>';
              $myprice ='<span style="font-size:16px; float:right;">'.$row['Total_Price'].'</span>';              
                $id = $row['id'];
          



  $image = '<img src="../images/'.$row["photo"].'" class="img-thumbnail"  style="width:60px; height: 60px;"  />';




     $output['data'][] = [ 
      $image,
      $row['name'],
       $row['size'],
        $row['Menu_QTY'],
      $prices,
       $myprice
        ];
         
    }
  
    $global_ = null;
    echo json_encode($output);

    return true;
} catch (PDOException $e) {
    $global_ = null;
    echo "Something went wrong. Please contact system administrator.";

}



