<?php
include'db/session.php';
include'header.php';
include'menubar.php';
include'sidebar.php';

$mycities = $users['Barangay'];

$mysql = "SELECT * FROM `delivery_fee` WHERE delivery_fee.City = '$Barangay'";
$mysqls = $connect->query($mysql);
  $rowsaaa = $mysqls->fetch_assoc();
  $myfees = $rowsaaa['Fee'];

if($Address == ''){
$user_address = 'Please Update Your Profile';
}else{
  $user_address = $Address;
}




if($Contact == ''){
$contact_Number = 'Please Update Your Profile';
}else{
  $contact_Number = $Contact;
}


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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Getting Ready</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
     


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="../images/<?php echo $abouts['Logo'];?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8" width="40"> <?php echo $abouts['Restaurant_name'];?>.
                    <small class="float-right">Date: <?php echo date("F d, Y");?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              
              	<center>
               <div id="control-division">
               		
               </div>
               </center>
             <br>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                 
                  <table id="order_data" class="table table-striped" >
  <thead>
 <th style="text-align: center;">Photo</th>
  <th style="text-align: center;">Menu</th>
   <th style="text-align: center;">Size</th>
    <th style="text-align: center;">QTY</th>
  <th style="text-align: center;">Price</th>
  <th style="text-align: center;">Total Price</th>
  
 
  
</thead>

</table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                
                </div>
                <!-- /.col -->




  <?php 
$myidsss = $users['id'];

$sql = mysqli_query($connect, "SELECT SUM(Total_Price) as total, orders.* FROM `orders` Where orders.customer_id = '$myid' AND orders.status Not In ('Cart', 'Done', 'delivered') ");
  while($row =$sql->fetch_assoc())          {
  $total = $row['total'];


}
$payment_gcash = $total + $myfees;
           ?>

                <div class="col-6">
                  <p class="lead">Amount Due <?php echo date("F d, Y");?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>&#8369; <?php echo $total;?> </td>
                      </tr>
                     
                      <tr>
                        <th>Delivery:</th>
                      
                        <td style="color:#000;">&#8369; <?php echo $myfees; ?></td>
                
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>&#8369; <?php echo $total + $myfees;?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
         
              <!-- /.row -->

              <!-- this row will not appear when printing -->
    
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <?php include'footer.php';?>
 <script src="js/script.js"></script>

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
 $('#order_data').DataTable({
        "ajax": {
            url: "fetchorder.php",
            type: "GET"
        },
        
        "paging": false,
     "paging": false,
        "lengthChange": false,
        "searching": false,
        "responsive": true,
        "ordering": false,
        "info": false,
        

    });

});



</script>

<script type="text/javascript">
  


$(document).ready(function(){
  
 fetch_poll_data();

 function fetch_poll_data()
 {
  $.ajax({
   url:"fetch_getting_ready.php",
   method:"POST",
   success:function(data)
   {
    $('#control-division').html(data);
   }
  })  
 }
setInterval(function(){fetch_poll_data()}, 1000);
});  


</script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="/myjs/sweetalert2@11.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css  ">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

 <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
