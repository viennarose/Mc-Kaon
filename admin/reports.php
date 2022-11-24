 <?php
include'header.php';
include'menubar.php';
include'sidebar.php';


?>
 <style>
 .table-striped tbody tr {
            line-height: 30px;
        }
         .table-striped td{
          text-align: center;
         }
   td{
  color: #000;
  font-size: 13px;
  text-align: left;

}th{
  font-size: 14.5px;

  text-align: left;
 
}
.dt-buttons{
margin-left: 5px!important;
margin-top: 20px!important;
font-size: 14px;
}
.dataTables_length{
  margin-left: 10px!important;
  margin-top: 20px!important;
  font-size: 14px;
}
.dataTables_filter{
  margin-top: 20px!important;
  margin-right: 20px!important;
}
.dataTables_filter input{
 font-size: 14px!important;
 width: 180px!important;
}.dataTables_filter label{
   font-size: 14px!important;
}.dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_paginate {
    float: none;
    text-align: center;
    font-size: 13px;
    margin-top: 5px;

}.dataTables_info{
  margin-left: 10px!important;
}
.info-box{
  box-shadow: 2px 1px 2px 5px  #434743;
}
    </style>


<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        
  <!-- Employee Table-- > <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table-->
<div class="row">
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="Total"></h3>

                <p>Total</p>
              </div>
              <div class="icon">
               <i class="fas fa-users"></i>
              </div>
             
            </div>
          </div>


          <div class="col">
            <!-- small box -->
            <div class="small-box  " style="background-color: #C0DD1F;">
              <div class="inner">
                <h3 id="Expense" style="color: #FFF;"></h3>

                <p style="color: #FFF;">Expenses</p>
              </div>
              <div class="icon">
             <i class="fas fa-user-tie"></i>
              </div>
            
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="Net"><sup style="font-size: 20px"></sup></h3>

                <p>Net Income</p>
              </div>
              <div class="icon">
              <i class="fas fa-book-open"></i>
              </div>
           
            </div>
          </div>
          </div>
<div class="row">
   
<div class="col">
    
     <div class="card" style="">
            <div class="card-header mycard"  >
              <div class="card-title " style="">
              <h3 class="card-title">Top Selling Menu</h3>
               </div>
         
        </div>
          <div class="card-body p-0" style="width:95%;">

    <table id="top" class="table table-dark " style="width:95%; ">
        <thead>
        <th>Category</th>
         <th>Product</th>
         <th>Total Sell</th>
         </thead>
      
          
    </table>
</div>

                
       </div>
  </div>

  <div class="col">
    <div class="card" style="">
     <div class="card-header mycard"  >
              <div class="card-title " style="">
                <h3 class="card-title">INCOME</h3>
               </div>
         
        </div>
          <div class="card-body p-0">
    <table id="Income" class="table table-dark " style="width:95%; ">
        <thead>
        <th>Menu Name</th>
        <th>Price</th>
         <th>Expense</th>
         <th>Order Qty</th>
         <th>Total Income</th>
         </thead>
     
          
    </table>
</div>
</div>
</div>
</div>
   </div>             
       </div><!-- /.container-fluid -->



</section>
</div>


</div>
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
    $('#Income').DataTable({
        "ajax": {
            url: "fetch/income.php",
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









function Total() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Total").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/Total.php", true);
  xhttp.send();

  },1000);

}
Total();



function Expense() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Expense").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/expenses.php", true);
  xhttp.send();

  },1000);

}
Expense();




function Net() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Net").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/Net.php", true);
  xhttp.send();

  },1000);

}
Net();
</script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="myjs/sweetalert2@11.js"></script>

<script src="myjs/sweetalert2.min.js"></script>
 <script src="myjs/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="myjs/datatables.min.css"/>
<link rel="stylesheet" href="myjs/jquery.dataTables.min.css">
 
<script src="myjs/jquery-3.5.1.js"></script>
 <

 <script src="myjs/jquery.dataTables.min.js"></script>
 <script src="myjs/dataTables.responsive.min.js"></script>


 <script src="myjs/dataTables.buttons.min.js"></script>

 <script type="" src="myjs/jszip.min.js"></script>
 <script  src="myjs/pdfmake.min.js"></script>
  <script src="myjs/vfs_fonts.js"></script>
  <script src="myjs/buttons.html5.min.js"></script>
  <script src="myjs/buttons.print.min.js "></script>
  <script src="../plugins/select2/js/select2.full.min.js"></script>