<?php

 include'../db/session.php';
                  

$moderna_vax = mysqli_query($connect, "SELECT count(*) AS users FROM employee_info ");
                         
                          while($moderna_vaxnow =$moderna_vax->fetch_assoc())          {


                    
                      $moderna_dose = $moderna_vaxnow['users'];
                    
                   }

 $total = number_format($moderna_dose);
echo  $total;
?>