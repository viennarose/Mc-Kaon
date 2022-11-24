 <?php 
  include'header.php';
   include'sidebar.php';
    include'menubar.php';

 ?>
<style type="text/css">
  .box{

  }
  #mybutton, #select_year{

position: relative;

font-size: 14px;
box-sizing: border-box;
transition: .5s;

}
#select_year{
  outline: none;
  border-radius: 25px ;
   height: 40px;
  width: 150px;
   padding-left: 15px;
margin-left: 10px;
}
#mybutton{
  position: relative;
   border-radius: 0 25px 25px 0;
   width: 80px;
   height: 39px;
   border:none;
   outline: none;
   cursor: pointer;
   background: #ffc107;
   color: #fff;


}

#barangay{

   height: 40px;
  width: 250px;
  padding: 2 25px;
  padding-left: 15px;
}
.mytitle{
  height: 40px;
  width: 280px;
  padding: 10px;
  padding-left: 0;
}
#legend ul {
        list-style: none;
      }

      #legend ul li {
        display: inline;
        padding-left: 30px;
        position: relative;
        margin-bottom: 4px;
        border-radius: 5px;
        padding: 2px 8px 2px 28px;
        font-size: 14px;
        cursor: default;
        -webkit-transition: background-color 200ms ease-in-out;
        -moz-transition: background-color 200ms ease-in-out;
        -o-transition: background-color 200ms ease-in-out;
        transition: background-color 200ms ease-in-out;
      }

      #legend li span {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 100%;
        border-radius: 5px;
      }
</style>
<script src="assets/domtoimage.js"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
  
 
     

            <div class="card" id="front">
              <div class="card-header">
                <h5 class="card-title">Income Statistic Report


                </h5>
                <div class="float-sm-right">
                  <a href="#" class="btn btn-primary btn-sm " onclick="downloadtable()"><i class="fas fa-download"></i> &nbsp; Download</a>
                </div>
</div>
<div class="card-body">
                    <form class="form-inline">
                  <div class="form-group">
                   <label for="email" >Year</label>
         <select class="" id="select_year" name="select_year">
                      <?php
                      $timezone = 'Asia/Manila';
  date_default_timezone_set($timezone);
                      $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
                        for($i=2000; $i<=2060; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                    </select>
                   
                  </div>
                </form>
 
                    <div class="chart">
                <br>
                <div id="legend" class="text-center"></div>
                   <script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>  
               <div id="chart" style="max-height:100%; height:400px; max-width:100%; width:100%; font-size:12px;"></div>
              

              </div>
            

            </div>
       
                <!-- /.table-responsive -->
         
              <div class="card-footer clearfix">
               
              </div>
              <!-- /.card-footer -->
            </div>
           
    </div>

           
            <!-- /.card -->
        

</section>
</div>
        <!-- /.row -->
        <!-- Main row -->
     
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php
include'footer.php';


  ?>


<script type="text/javascript" src="myjs/script.js"></script>


               <?php  


$connect = new mysqli('localhost', 'elraogsz_ordering', 'WkTEyekYnnS;', 'elraogsz_ordering');
 $and = 'AND YEAR(date) = '.$year;
 $months = array();
 for( $m = 1; $m <= 12; $m++ ) {
 $query = "SELECT SUM(orders.Total_Price) as menutotal FROM `orders` where status Not In('Cart') $and";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{

    
    
  $chart_data .= "{ Department: income, number:".$row["menutotal"]."}, ";

}
 ?>  

  
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'Department',
 ykeys:['number'],
 labels:['Department', 'number'],
 hideHover:'auto',
 stacked:true,
  barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return 'rgb(' + red + ',0,0)';
    }
    else {
      return '#1457B2';
    }
  }
});
</script>

<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'statistics?year='+$(this).val();
  });
});








</script>
<script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>  
<script src="jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript">
  
  function downloadtable() {

        
  
    var front = document.getElementById('front');
        domtoimage.toPng(front)
            .then(function (dataUrl) {
                var img = new Image();
                img.src = dataUrl;
                downloadURI(dataUrl, "Statistic Report")
            })
            .catch(function (error) {
                console.error('oops, something went wrong!', error);
            });




    }




 
    function downloadURI(uri, name) {
        var link = document.createElement("a");
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
        window.close();
        
    }

</script>
