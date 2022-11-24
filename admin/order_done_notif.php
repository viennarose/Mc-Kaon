<?php

include'header.php';
include'menubar.php';
include'sidebar.php';
$customer = $_GET['id'];
$update_notif = mysqli_query($connect, "UPDATE `notification` SET `status`='Seen' Where `user_id`='$customer'");




$mysql = mysqli_query($connect, "SELECT orders.*,user.* FROM `orders` Inner join user on orders.Customer_id = user.id Where orders.Order_id = '$customer'");
 while($row =$mysql->fetch_assoc())          {

$fullname = $row['LastName'].', '.$row['FirstName'].' '.$row['MiddleName'];

$address = $row['Address'];
$contact_Number =  $row['Contact'];
$Email=  $row['Email'];
$mycity = $row['City'];
$mybrgy=  $row['Barangay'];
$orderdate =  date("F d, Y H:i a", strtotime($row['date']));
$tokenid = $row['token'];

$Payment_status = $row['Payment_status'];
 }


$mysql = mysqli_query($connect, "SELECT `id`, `psgcCode`, `citymunDesc`, `regDesc`, `provCode`, `citymunCode` FROM `city` Where citymunCode = '$mycity'");
 while($row =$mysql->fetch_assoc())          {

$citymunDesc = $row['citymunDesc'];
$citymunCode = $row['citymunCode'];
 }

$mysql = mysqli_query($connect, "SELECT `id`, `brgyCode`, `brgyDesc`, `regCode`, `provCode`, `citymunCode` FROM `brgy` WHERE citymunCode = '$citymunCode'");
 while($row =$mysql->fetch_assoc())          {

$brgyDesc = $row['brgyDesc'];

 }
$full_address = $address.' '.$brgyDesc.' '.' '.$citymunDesc;
$mysql = "SELECT * FROM `delivery_fee` WHERE delivery_fee.City = '$mycity'";
$mysqls = $connect->query($mysql);
  $rowsaaa = $mysqls->fetch_assoc();
  $myfees = $rowsaaa['Fee'];

if($address == ''){
$user_address = 'Please Update Your Profile';
}else{
  $user_address = $address;
}




if($contact_Number == ''){
$contact_Number = 'Please Update Your Profile';
}else{
  $contact_Number = $contact_Number;
}


?>
<style>
    @media print{
    .no-print, footer{
        visibility: hidden;
    }

    #printed{
        visibility: visible;
     
    }
}
</style>
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
            <div class="invoice p-3 mb-3" id="printed">
              <!-- title row -->
              <div >
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="../images/mylogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8" width="40"> El RAZA Restaurant and Bar.
                    <small class="float-right">Date: <?php echo date("F d, Y");?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
             
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo $fullname;?></strong><br>
                    <?php echo $full_address;?><br>
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

                  <b>Order ID:</b> <?php echo $customer;?><br>
                  <b>Payment Due:</b> <?php echo $orderdate;?><br>
                  <b>Account:</b> <?php echo $tokenid;?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                 
                  <table id="order_data" class="table table-striped" >
  <thead>
    <th style="text-align: center;">Menu</th>
  <th style="text-align: center;">Price</th>
  <th style="text-align: center;">Total Price</th>
  </thead>
<?php $mysql = mysqli_query($connect, "SELECT menu.name, orders.*  FROM `orders` inner Join menu on orders.Menu_id = menu.id Where orders.Order_id = '$customer'");
 while($row =$mysql->fetch_assoc())          {
 $Quantity = $row['Menu_QTY'];
            $Name = '<span style="font-size:16px; float:left;">'.$row['name'].'</span> <b><span style="font-size:16px; float:right;">'.$Quantity.'x</b></span>';



              $price = $row['Menu_Price'];
               $prices = '<span style="font-size:16px; float:right;">'.$row['Menu_Price'].'</span>';
              $myprice ='<span style="font-size:16px; float:right;">'.$row['Total_Price'].'</span>';              
                $id = $row['id'];
          
 ?>
  <tbody>
    <td><?php echo $Name;?></td>
    <td><?php echo $prices;?></td>

<td><?php echo $myprice;?></td>


  </tbody>
<?php }?>
  <tfoot>
   
    <td colspan="4" id="total"></td>
   
   
  </tfoot>

</table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
            
                <!-- /.col -->




  <?php 


$sql = mysqli_query($connect, "SELECT SUM(Total_Price) as total, orders.* FROM `orders` Where orders.Order_id = '$customer' ");
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
                      <tr>
                        <th>Payment Method:</th>
                        <td><?php if($Payment_status == "Paid"){ echo "Via G-cash";}else{echo "COD";}?></td>
                      </tr>
                       <tr>
                        <th>Payment Status:</th>
                        <td>&#8369; <?php echo $Payment_status;?></td>
                      </tr>
                    </table>
                  </div>
                </div>  
                <!-- /.col -->
              </div>
         
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              </div>
              <div class="row no-print">
               
          

                  <button onclick="window.print()" class="btn btn-default float-right"><i class="fas fa-print"></i> Print</a>&nbsp; &nbsp; &nbsp;
                  <form id="confirm_order" enctype="multipart/form-data">
                     <input type="text" name="id" id="id" value="<?php echo  $customer;?>" hidden=""> 
                     
                
                </form>
                     

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
 <?php include'footer.php';?>
</div>
 <script src="js/script.js"></script>

</body>
</html>
<script type="text/javascript">





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
                document.getElementById('move_id').value = result.id;
               document.getElementById('Quantity').value = result.Menu_QTY;
       
   document.getElementById('menu_id').value = result.Menu_id;








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

 
