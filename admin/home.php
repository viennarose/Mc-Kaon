 <?php 
  include'header.php';
   include'sidebar.php';
    include'menubar.php';

 ?>

 <style>
     td{
         color:#000;
         font-size:13px;
     }
     th{
         font-size:14px;
     }
 </style>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $abouts['Restaurant_name'];?></li>
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
        <div class="row">
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="users"></h3>

                <p>User's</p>
              </div>
              <div class="icon">
               <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer" style="color: #FFFF;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col">
            <!-- small box -->
            <div class="small-box  " style="background-color: #C0DD1F;">
              <div class="inner">
                <h3 id="Employee" style="color: #FFF;"></h3>

                <p style="color: #FFF;">Employee's</p>
              </div>
              <div class="icon">
             <i class="fas fa-user-tie"></i>
              </div>
              <a href="employee.php" class="small-box-footer" style="color: #FFFF;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="menu"><sup style="font-size: 20px"></sup></h3>

                <p>Menu</p>
              </div>
              <div class="icon">
              <i class="fas fa-book-open"></i>
              </div>
              <a href="menu.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

           

        
          <!-- ./col -->
         
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
<?php if($Account_Type == 'Administrator' or $Account_Type == 'Manager'){?>
<div class="card ">
<div class="card-header">
    <h3 class="card-title">Room Reservation</h3>
</div>
<div class="card-body">
    <table id="reservation" class="table table-dark table-sm">
        <thead>
        <th>Fullname</th>
        <th>Room Name</th>
         <th>Date</th>
         <th>Time</th>
         <th>Status</th>
         <th>Downpayment</th>
         <th>Action</th>
         </thead>
       <tbody>
          </tbody>
          
    </table>
</div>
</div>


<?php }?>
<div class="row">
      <div class="col">

<div class="card ">
<div class="card-header">
    <h3 class="card-title">Top Selling Menu</h3>
</div>
<div class="card-body">
    <table id="top" class="table table-dark table-sm">
        <thead>
        <th>Category</th>
         <th>Product</th>
         <th>Total Sell</th>
         </thead>
       <tbody>
          </tbody>
          
    </table>
</div>
</div>
</div>
  <div class="col">
      <div class="card ">
         
          <div class="card-body ">
              <form class="form-inline " style="float:right;">
                  <div class="form-group">
                   <label for="email" >Select Year : &nbsp; &nbsp; &nbsp;</label>
         <select class="form-control" id="select_year" name="select_year">
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
                <br>
                 <br>
                 <br>
                 <br>
             <div id="chartContainers" style="max-height:100%; height:300px; max-width:100%; width:100%; font-size:12px;"></div>   
          </div>
          
      </div>
      </div>
</div>
  

            <!-- /.card -->


            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
          

              </div><!-- /.card-body -->
             

            <!-- /.card -->


            <!-- /.card -->
          </section>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
           
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script src="canvasjs.min.js"></script>
  <?php 
  include'footer.php';

  ?>
  <script type="text/javascript" language="javascript" >
$(document).ready(function(){
  $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add User");
  $('#action').val("Add");
  $('#operation').val("Add_blood_group");
  $('#user_uploaded_image').html('');
 });


 $('#top').DataTable({
        "ajax": {
            url: "fetch/best_seller.php",
            type: "GET"
        },
        order: [[2, 'desc']],
        "paging": true,
     "paging": true,
        "lengthChange": true,
        "searching": true,
        "responsive": true,
        "ordering": true,
        "info": true
    });
    
 
});
$(document).on('click', '.Delete', function(){
  var id = $(this).attr("id");
  Swal.fire({
  title: 'Are you sure You want to Approved this Reservation?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Approved it!'
}).then((result) => {
  if (result.isConfirmed) {
   $.ajax({
    url:"update/reservation.php",
    method:"POST",
    data:{id:id},
    success:function(data)
    {
    Swal.fire(
      'Approved!',
      'Reservation has been Approved.',
      'success'
    )
     $('#reservation').DataTable().ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
})
 });
 
 $(document).on('click', '.Decline', function(){
  var id = $(this).attr("id");
  Swal.fire({
  title: 'Are you sure You want to Decline this Reservation?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Decline it!'
}).then((result) => {
  if (result.isConfirmed) {
   $.ajax({
    url:"update/reservation_decline.php",
    method:"POST",
    data:{id:id},
    success:function(data)
    {
    Swal.fire(
      'Declined!',
      'Reservation has been Declined.',
      'success'
    )
     $('#reservation').DataTable().ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
})
 });
function menu() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("menu").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/menu.php", true);
  xhttp.send();

  },1000);

}
menu();

function users() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("users").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/users.php", true);
  xhttp.send();

  },1000);

}
users();

function Employee() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Employee").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/Employee.php", true);
  xhttp.send();

  },1000);

}
Employee();


function Rooms() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Rooms").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/Rooms.php", true);
  xhttp.send();

  },1000);

}
Rooms();



window.onload = function() {

var chart = new CanvasJS.Chart("chartContainers", {
   exportEnabled: true,
  animationEnabled: true,
   title: {
    text: "Monthly Sales Percentage Per Year"
  },
  data: [{
   type: "pie",
    showInLegend: true,
    toolTipContent: "{name}: <strong>#percent%</strong>",
    indexLabel: "{name} - #percent% - {y} total",

    dataPoints: [
      <?php  
  include'db/connect.php';
$and = 'AND YEAR(date) = '.$year;
 $query = "SELECT count(*) as number, date as month FROM `orders` WHERE status Not in ('Cart') $and Group By MONTH(date)";  
 $result = mysqli_query($connect, $query);  

                          while($row = mysqli_fetch_array($result))  
                          {  
                          
                              $date =     date("F", strtotime($row['month']));

                            
                          ?>  
      {y: <?php echo $row['number'];?>, name: "<?php echo $date;?>"},
       <?php }?>
    ]
    
  }]

});
chart.render();
}

 </script>
<script>
    $(function(){
  $('#select_year').change(function(){
    window.location.href = 'home?year='+$(this).val();
  });
});
 
</script>
<script src="javascript/users.js"></script>

 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css  ">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
  <script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>