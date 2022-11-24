<?php

 include'../db/session.php';
                  

$moderna_vax = mysqli_query($connect, "SELECT count(*) AS menu FROM menu ");
                         
                          while($moderna_vaxnow =$moderna_vax->fetch_assoc())          {


                    
                      $moderna_dose = $moderna_vaxnow['menu'];
                    
                   }

 $total = number_format($moderna_dose);
echo  $total;
?>