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
              <li class="breadcrumb-item active">Pending Orders</li>
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

        <table id="example" class="table table-dark" cellspacing="0" width="100%">
           
                        <thead>
                          <th  style="text-align: center; ">Order I.D</th>
                          <th  style="text-align: center; ">Customer Name</th>
               <th  style="text-align: center; ">Total Price</th>
             
               <th  style="text-align: center; ">Tools</th>
             
               
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
    
     <h4 class="modal-title">Add New Menu</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">


 




 <div class="form-group">
                  <label for="Last">Menu Name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Name" name="Name" placeholder="Name">

                  </div>
              </div>
               <div class="form-group">
                  <label for="Last">Price</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Price" name="Price" placeholder="Price">

                  </div>
              </div>

                      <div class="form-group">
                  <label for="Last">Quantity</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity">

                  </div>
              </div>
               <div class="form-group">
                  <label for="Last">Expenses</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="expenses" name="expenses" placeholder="Expenses">

                  </div>
              </div>
               <div class="form-group">
                  <label for="Last">Category</label>
                  <div class="input-group">
         
<select class="form-control" name="category" id="category">
  <option>--Select Category--</option>
  <?php

$mysql = mysqli_query($connect, "SELECT * FROM category");
while ($row = $mysql->fetch_assoc()) {

  ?>
<option value="<?php echo $row['id'];?>"><?php echo $row['Category'];?></option>

<?php }?>
</select>

                  </div>
              </div>
                <div class="form-group">
                  <label for="Last">Decription</label>
                  <div class="input-group">
         
<textarea class="form-control" id="Decription" name="Decription" rows="5"></textarea>

                  </div>
              </div>

              <div class="form-group">
                  <label for="Last">Photo</label>
                  <div class="input-group">
         
<input type="file" name="file" id="file">
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
    
     <h4 class="modal-title">Update Category</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
<div class="form-group">
                  <label for="Last">Menu Name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Names" name="Names" placeholder="Name">

                  </div>
              </div>
               <div class="form-group">
                  <label for="Last">Price</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Prices" name="Prices" placeholder="Price">

                  </div>
              </div>

                      <div class="form-group">
                  <label for="Last">Quantity</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="qtys" name="qtys" placeholder="Quantity">

                  </div>
              </div>
               <div class="form-group">
                  <label for="Last">Expenses</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="expensess" name="expensess" placeholder="Expenses">

                  </div>
              </div>
               
                <div class="form-group">
                  <label for="Last">Decription</label>
                  <div class="input-group">
         
<textarea class="form-control" id="Decriptions" name="Decriptions" rows="5"></textarea>

                  </div>
              </div>
              <input type="text" name="ids" id="ids" hidden="">
<input type="text" name="myphoto" id="myphoto" hidden="">
              <div class="form-group">
                  <label for="Last">Photo</label>
                  <div class="input-group">
         
<input type="file" name="file" id="file">
                  </div>
              </div>
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


 $('#example').DataTable({
        "ajax": {
            url: "fetch/pending_orders.php",
            type: "GET"
        },
        
        "paging": true,
     "paging": true,
        "lengthChange": true,
        "searching": true,
        "responsive": true,
        "ordering": true,
        "info": true,
        dom: 'lBfrtip',
            buttons: [
                'excel', 'csv', 'pdf', 'copy', 'print'
            ],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]

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
    url:"delete/menu.php",
    method:"POST",
    data:{id:id},
    success:function(data)
    {
    Swal.fire(
      'Deleted!',
      'Data has been deleted.',
      'success'
    )
     $('#example').DataTable().ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
})
 });


$(document).on('submit', '#Admin_form', function(event){
  event.preventDefault();

    var Name = $('#Name').val(); 
  var Price = $('#Price').val();
  var qty = $('#qty').val();
  var expenses = $('#expenses').val();
  var category = $('#category').val();
  var Decription = $('#Decription').val();






  
  if(Name != '' && Price != '' && qty != '' && expenses != '' && category != '--Select Category--' && Decription != '')
  {
  
   $.ajax({
    url:"insert/menu.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    beforeSend:function(){
$('.myloaders').show();
            },
    success:function(data)
    {
         Swal.fire('Data Saved Successfull!', '', 'success');
       $('#example').DataTable().ajax.reload();
       $('#Admin_form')[0].reset();
       $('.loader').hide();
   
    
    }
   });
  }
  else
  {
   Swal.fire('Fill All Data!', '', 'info');
  }
 });

function update(id) {
    if (id) {
        $("#id").remove();
        $.ajax({
            url: 'fetch_single/menu.php',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',

            success: function (result) {
                document.getElementById('Names').value = result.name;
                 document.getElementById('qtys').value = result.qty;
                  document.getElementById('Prices').value = result.price;
                   document.getElementById('Decriptions').value = result.description;
                   
                     document.getElementById('myphoto').value = result.photo;
                      document.getElementById('expensess').value = result.expenses;
        document.getElementById('ids').value = result.id;
   

                $("#update_form").append('<input type="hidden" name="id" id="id" value="' + id + '"/>');
            }
        });
    }
}





$(document).on('submit', '#update_form', function(event){
  event.preventDefault();
  
Swal.fire({
  title: 'Are you sure You want to Update this Data?',
  text: '',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Update it!'
}).then((result) => {
  if (result.isConfirmed) {
     $.ajax({
    url:"update/menu.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
     beforeSend:function(){
$('.myloaders').show();
            },
    success:function(data)
    {
         Swal.fire('Data Updated Successfull!', '', 'success');
      $('#example').DataTable().ajax.reload();
$('.loader').hide();
      
    
    }

   });
  }
  else
  {
   Swal.fire('Data Not Updated Successfull!', '', 'success');
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