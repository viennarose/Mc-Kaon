<?php

 include'../db/session.php';
                  

$moderna_vax = mysqli_query($connect, "SELECT SUM(orders.Total_Price) as menutotal,SUM(total_expense) as expense FROM `orders` where status Not In('Cart')  ");
                         
                          while($row =$moderna_vax->fetch_assoc())          {


                    
              
$expenses = $row["expense"];

$total =  ($row["menutotal"] - $expenses);
                    
                   }

 $total = number_format($total);
echo  $total;
?>