<?php

 include'../db/session.php';
                  

$moderna_vax = mysqli_query($connect, "SELECT SUM(total_expense) as expense FROM `orders` where status Not In('Cart')  ");
                         
                          while($row =$moderna_vax->fetch_assoc())          {


                    
              
$expenses = $row["expense"];


                    
                   }

 $total = number_format($expenses);
echo  $total;
?>