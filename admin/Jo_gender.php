 <?php
include'db/session.php';
include'header.php';
include'menubar.php';
include'sidebar.php';


?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
   
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Donator.php"><i class="fas fa-arrow-left"></i> Back</a></li>
              <li class="breadcrumb-item active">Add Donor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">

      <div class="container-fluid">
         <div class="card ">
              <div class="card-header ">
                <h3 class="card-title myheader" style="font-size: 30px;"><b>General Percentage <i class="fas fa-venus-mars" style="font-size: 30px;"></i></b></h3>
              </div>

                <div class="card-body">
  
   <div class="row">

        <div class="col">
          <div id="pieChart" ></div>
              
                 
   
        
                   
               
                 
       
            </div>
                <div class="col">
                  <a href="export_gender_cos.php?&id=JO" target="blank"  class="btn btn-primary float-sm-right"><i class="fas fa-download"></i> export statistics</a>
                </div>
                  </div>
                   
            </div>
                   

</section>
</form>

</div>
</div>
</section>
</div>
          <?php 

include("footer.php");
?> 
<style type="text/css">
  
 #pieChart{
  width: 100%;
  height: 400px;
 }
 
    @media screen and (max-width: 700px) {
   #pieChart{ 
    width: 100%;
    height: auto;
   
  }
  
}

@media screen and (max-width: 400px) {
  #pieChart  {
   width: 300px;
  }
}
  
</style>
          
     

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>      
    <?php  
 $connect = mysqli_connect("localhost", "mdccapst_mc-kaon", "ilovemckaon", "mdccapst_mc-kaon");  
 $query = "SELECT employee_information.sex, count(*) as number FROM employee_information Inner Join employment_info on employee_information.employeeno = employment_info.employeeno Where employment_info.employmenttype = 'JO' and (employment_info.isactive = 'yes' or employment_info.isactive = 'Newly Hired' or employment_info.isactive = 'Renewed') and employee_information.sex NOT IN('-- Sel','') GROUP BY employee_information.sex";  
 $result = mysqli_query($connect, $query);  
 ?>  

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['sex', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          
                               echo "['". $row["sex"]."', ".$row["number"]."],";  

                          }  
                          ?>  
                     ]);  
                var options = {  
                     
                        is3D:true,  
                      pieHole: 0.4,
                      fontSize: 20 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('pieChart'));  
                chart.draw(data, options);  
           }  
           </script>  