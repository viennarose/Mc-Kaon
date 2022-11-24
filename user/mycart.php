<?php
include'db/session.php';
include'header.php';
include'menubar.php';
include'sidebar.php';
$cityofuser = $users['City'];
$mycities = $users['Barangay'];
if ($mycities  != 'N/A') {
	

$mysql = "SELECT * FROM `delivery_fee` WHERE delivery_fee.City = '$mycities'";
$mysqls = $connect->query($mysql);
  $rowsaaa = $mysqls->fetch_assoc();
  $myfees = $rowsaaa['Fee'];
}
else{
 $myfees = "Please Update Your Profile";
}
if($users['Address'] == ''){
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
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
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
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>


                    <strong><?php echo $abouts['Restaurant_name'];?></strong><br>
                    <?php echo $abouts['Address'];?><br>
                   
                    Phone: <?php echo $abouts['Contact_info'];?><br>
                    Email: <?php echo $abouts['Email'];?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                      

<?php
$get_sched = mysqli_query($connect, "SELECT * FROM `brgy` WHERE `brgyCode`='$Barangay'");
                         
                          while($get_sched_now =$get_sched->fetch_assoc())          {

$brgyDesc = $get_sched_now['brgyDesc'];

}?>

<?php
$get_scheds = mysqli_query($connect, "SELECT * FROM `city` WHERE `psgcCode`='$cityofuser'");
                         
                          while($get_sched_nows =$get_scheds->fetch_assoc())          {

$citymunDesc = $get_sched_nows['citymunDesc'];

}?>
                    <strong><?php echo $fullname;?></strong><br>
                    <?php echo $user_address;?> <?php echo $brgyDesc;?>, <?php echo $citymunDesc;?><br>
                    Phone:  <?php echo $contact_Number;?><br>
                    Email: <?php echo $Email;?>
                  </address>


                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                               <?php 

    $qrcoding = "1234567890";

                   $generate = substr(str_shuffle($qrcoding),0,5);
                 
?>
                  <b>Invoice #<?php echo $generate;?></b><br>
                  <br>
                   <?php 
date_default_timezone_set("Asia/Singapore" );
$date = date("y-m-d");
$Dates = date("F d, Y");
    $qrcoding = "1234567890";

                   $generate = substr(str_shuffle($qrcoding),0,8);
                   $transcode = $date."-".$generate;
?>
                  <b>Order ID:</b> <?php echo $transcode;?><br>
                  <b>Payment Due:</b> <?php echo $Dates;?><br>
                  <b>Account:</b> <?php echo $mytoken;?>
                </div>
                <!-- /.col -->
              </div>
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
  
  <th>Action</th>
  </thead>



</table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../dist/img/credit/gcash.png" alt="Visa" width="50" height="30">
                  <img src="../dist/img/credit/COD.png" alt="Mastercard" width="80" height="50">
                
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   Thank You For Ordering
                  </p>
                </div>
                <!-- /.col -->




  <?php 
$myidsss = $users['id'];
 if($City != 'N/A'){

$sql = mysqli_query($connect, "SELECT SUM(Total_Price) as total, orders.* FROM `orders` Where orders.customer_id = '$myid' AND orders.status ='Cart' ");
  while($row =$sql->fetch_assoc())          {
  $total = $row['total'];


}

$payment_gcash = $total + $myfees;

}else{
$payment_gcash = 'Please Update Your Profile';
$total = 'Please Update Your Profile';
}
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
                        <td>&#8369; <?php if($City != 'N/A'){

                        	echo $total + $myfees;}else{
                        		echo "Please Update Your Profile";}?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
         
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
          

                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <form id="confirm_order" enctype="multipart/form-data">
                     <input type="text" name="payment" id="payment" value="COD" hidden=""> 
                     <input type="text" name="id" id="id" value="<?php echo  $users['id'];?>" hidden=""> 
                     
                  <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Cash On Delivery
                  </button>
                </form>
                     
      <a href="pay_gcash.php?&id=<?php echo $payment_gcash;?>" target="_blank" class="x-getpaid-button float-right"><img src="https://getpaid.gcash.com/assets/img/paynow.png"></a>

                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div id="Move" class="modal fade">

 <div class="modal-dialog">
  <form id="update_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header" >
    <h3 style="font-size: 20px;">Order</h3>
    
      <button type="button" class="close" data-dismiss="modal" style="font-size: 20px;">&times;</button>
    </div>
    <div class="modal-body">
       <input type="text" name="move_id" id="move_id" class=" form-control" hidden="" >
<input type="text" name="menu_id" id="menu_id" class=" form-control" hidden="" >
<input type="text" name="name" id="name" class=" form-control"  hidden="">
       <div class="form-group">
        <label style="font-size: 18px;">Quantity</label>
      <input type="number" name="Quantity" id="Quantity" class=" form-control"  style="padding: 15px; font-size: 18px;">
  
   </div>

  <div class="col " id="sizeid">
         <label for="inputZip">Size</label>
       <select class="form-control" name="mysize_" id="mysize_">
      <option value="Small" id="Small_">Small</option>
<option value="Solo" id="Solo_">Solo</option>
<option value="Medium" id="Medium_">Medium</option>
<option value="Regular" id="Regular_">Regular</option>
<option value="Large" id="Large_">Large</option>
<option value="XL" id="XL_">XL</option>
<option value="XXL" id="XXL_">XXL</option>

     </select>
 
    </div>
   
<br>
        </div>
<div class="modal-footer">
   <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-primary" value="Update Cart" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
      </div>
    </form>
  </div>
</div>
 <script src="js/script.js"></script>

</body>
</html>
  <script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){



 $('#order_data').DataTable({
        "ajax": {
            url: "fetch.php",
            type: "GET"
        },
        order: [[1, 'desc']],
        "paging": false,
     "paging": false,
        "lengthChange": false,
        "searching": false,
        "responsive": false,
        "ordering": false,
        "info": false
    });
});





 $(document).on('click', '.Delete', function(){
  var id = $(this).attr("id");
  Swal.fire({
  title: 'Are you sure You want to delete this data?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
   $.ajax({
    url:"delete/cart.php",
    method:"POST",
    data:{id:id},
    success:function(data)
    {
    
    window.location.href = 'mycart.php';
    }
   });
  }
  else
  {
   return false; 
  }
})
 });





function update(id) {
    if (id) {
        $("#id").remove();
        $.ajax({
            url: 'fetch_single/cart.php',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',

            success: function (result) {

               document.getElementById('mysize_').value = result.size;  
                document.getElementById('move_id').value = result.id;
               document.getElementById('Quantity').value = result.Menu_QTY;
         document.getElementById('name').value = result.name;
       
   document.getElementById('menu_id').value = result.Menu_id;

var Category = result.Category;
 if (Category == 'MILKTEA'){
   document.getElementById('XXL_').style.display = 'none';
   document.getElementById('Solo_').style.display = 'none';
document.getElementById('Medium_').style.display = 'none';
document.getElementById('XL_').style.display = 'none';

 }

 if(Category == 'Burger' || Category == 'Frappe' || Category == 'Nachos' || Category == 'Add Ons'){
document.getElementById('sizeid').style.display = 'none';
 }
  

 if(Category == 'Fries' ){
document.getElementById('XXL_').style.display = 'none';
document.getElementById('Solo_').style.display = 'none';
document.getElementById('Large_').style.display = 'none';
document.getElementById('XL_').style.display = 'none';
document.getElementById('Medium_').style.display = 'none';
 }
  
if(Category == 'Pizza' ){
document.getElementById('Regular_').style.display = 'none';
document.getElementById('Small_').style.display = 'none';

 }



                $("#update_form").append('<input type="hidden" name="id" id="id" value="' + id + '"/>');
            }
        });
    }
}



$(document).on('submit', '#update_form', function(event){
  event.preventDefault();


     $.ajax({
    url:"update/cart.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
         
        window.location.href = 'mycart.php';
      
    
    }

   });
 });


 $(document).on('submit', '#confirm_order', function(event){
  event.preventDefault();

    Swal.fire({
  title: 'Are you sure you are finished ?',
  text: "You won't be able to cancel this transaction!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Order Now!'
}).then((result) => {
  if (result.isConfirmed) {
  
   $.ajax({
    url:"update/myorder.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
       window.location.href = 'onprocess.php';
 
   

    }
   });
  }
  else
  {
   return false; 
  }
})
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
