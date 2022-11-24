<?php
include'db/session.php';
//fetch.php
$project  = new PDO("mysql:host=localhost;dbname=elraogsz_ordering", "elraogsz_ordering", "WkTEyekYnnS;");
$code = $users['id'];

try {
    $output = ['data' => []];
    $i = 0;
    $stmt = $project->query("SELECT menu.name, menu.price, customer_order.*  FROM `customer_order` inner Join menu on customer_order.name = menu.id Where customer_order.customer_id = '$code' AND customer_order.status ='0' ");
    $stmt->execute();
    $t_sn = 1;
    while ($row = $stmt->fetch()) {
        $i++;
        $actionLink = '
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#Move" style="padding:6px 6px 6px 6px; font-size:16px;" onclick="update('.$row['id'].')"><i class="fas fa-edit icon" ></i> Edit</button>
          <button type="button" name="delete" id="'.$row["id"].'" style="padding:6px 6px 6px 6px; font-size:16px;" class="btn btn-danger  Delete btn-sm"><i class="fas fa-trash"></i> Remove</button>
        ';
  $Quantity = $row['Quantity'];
            $Name = '<span style="font-size:16px; float:left;">'.$row['name'].'</span> <b><span style="font-size:16px; float:right;">'.$Quantity.'x</b></span>';



              $price = $row['price'];
               $prices = '<span style="font-size:16px; float:right;">'.$row['price'].'</span>';
              $myprice = ($price * $Quantity);              
                $id = $row['id'];
          
     $output['data'][] = [ 
      $Name,
      $prices,
       $myprice,
       
      
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



