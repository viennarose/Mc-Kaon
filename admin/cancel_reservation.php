 <?php
include'header.php';
include'menubar.php';
include'sidebar.php';


?>
 <style>
        .dataTables_length {
            margin-bottom: 30px;
        }
        
        .dataTables_length select {
            border: 1px solid #e4e4e4;
        }
        
        .dt-buttons a {
            margin-left: 12px;
            font-size: 12px;
            padding: 6px;
            border: 1px solid #e4e4e4;
            background: #FFF;
            box-shadow: 0px 0px 14px 0px #ececec;
        }
        
        .dataTables_filter input {
            border: 1px solid #e4e4e4;
        }
        
        .table-striped tbody tr {
            line-height: 30px;
        }
         .table-striped td{
          text-align: center;
         }
         td{
          color: #000;
          text-align: center;
          font-size: 13px;
         }th{
         font-size: 13px;
         }
         .loader{
       display: none;
      }
    </style>


<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">Canceled Reservation</li>
            </ol>
          </div>
        </div>
    
  <!-- Employee Table--><!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table-->







        <div class="card" style="">
            <div class="card-header " style="border:none;" >
              <div class="card-title " style="">
    
               </div>
               <div class="func" style=" ">
             <button class="btn btn-primary btn-sm d-block-inline ml-2" data-toggle="modal"
                            data-target="#admin">
                            <i class="fa fa-plus"></i> Add New
                        </button>
                 </div>
          <br>

         <table id="reservation" class="table table-dark table-sm">
        <thead>
        <th>Fullname</th>
        <th>Room Name</th>
         <th>Date</th>
         <th>Time</th>
         <th>Status</th>
         <th>Downpayment</th>

         </thead>
       <tbody>
          </tbody>
          
    </table>
          
          </div>
<div id="admin" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="Admin_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Add New Delivery Fee's</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">


 




  <div class="form-group">
                  <label for="Last">City</label>
                  <div class="input-group">
         
<select class="form-control" name="City" id="City">
  <option value="--Select City--">--Select City--</option>
  <?php

$mysql = mysqli_query($connect, "SELECT * FROM city");
while ($row = $mysql->fetch_assoc()) {

  ?>
<option value="<?php echo $row['citymunCode'];?>"><?php echo $row['citymunDesc'];?></option>

<?php }?>
</select>
</div>
</div>  
               <div class="form-group">
                  <label for="Last">Delivery Fee</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Fee" name="Fee" placeholder="Delivery Fee">

                  </div>
              </div>

                 
              
<div class="loader">
  
  <img src="preloader.gif" alt="" style="width: 50px;height:50px;">
</div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>
       <div id="update_category" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="update_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Update Delivery Fee</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
<div class="form-group">
                  <label for="Last">City/Municipality</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Names" name="Names" placeholder="Name" readonly="">

                  </div>
              </div>
               <div class="form-group">
                  <label for="Last">Delivery Fee</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Delivery" name="Delivery" placeholder="">

                  </div>
              </div>

           <input type="number" class="form-control" id="ids" name="ids" placeholder="" hidden="">        
<div class="loader">
  
  <img src="preloader.gif" alt="" style="width: 50px;height:50px;">
</div>
  
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Update" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
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

 $('#reservation').DataTable({
        "ajax": {
            url: "fetch/cancel_reservation.php",
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

$(document).on('click', '.Decline', function(){
  var id = $(this).attr("id");
  Swal.fire({
  title: 'Are you sure You want to Cancel this Reservation?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Cancel it!'
}).then((result) => {
  if (result.isConfirmed) {
   $.ajax({
    url:"update/cancel_reservation.php",
    method:"POST",
    data:{id:id},
    success:function(data)
    {
    Swal.fire(
      'Canceled!',
      'Reservation has been Canceled.',
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
</script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css  ">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
 <script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="myjs/sweetalert2@11.js"></script>

<script src="myjs/sweetalert2.min.js"></script>
 <script src="myjs/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="myjs/datatables.min.css"/>
<link rel="stylesheet" href="myjs/jquery.dataTables.min.css">
 
<script src="myjs/jquery-3.5.1.js"></script>

 <script src="myjs/jquery.dataTables.min.js"></script>
 <script src="myjs/dataTables.responsive.min.js"></script>


 <script src="myjs/dataTables.buttons.min.js"></script>

 <script type="" src="myjs/jszip.min.js"></script>
 <script  src="myjs/pdfmake.min.js"></script>
  <script src="myjs/vfs_fonts.js"></script>
  <script src="myjs/buttons.html5.min.js"></script>
  <script src="myjs/buttons.print.min.js "></script>
  <script src="../plugins/select2/js/select2.full.min.js"></script>