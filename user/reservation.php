 <?php
include'db/session.php';
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

         #my-text-box {
            font-size: 18px;
            height: 1.5em;
          
        }
        textarea{
            width:250px;
            height:300px;
        }
        .form-section{
            overflow:hidden;
            
        }
        .fleft{float:left}
        .fright{float:left; padding-left:15px;}
        .fright button{display:block; margin-bottom:10px;}
        .dropdown-item:hover{
          background: #E5E5E5;
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
              <li class="breadcrumb-item active">Room Reservation Table</li>
            </ol>
          </div>
        </div>
    
  <!-- Employee Table-- > <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table-->







        <div class="card" style="">
            <div class="card-header " >
              <div class="card-title " style="">
    <h5>Room Reservation Table</h5>
               </div>
              </div>    

<div class="card-body">
                 
    

        <table id="example1" class="table table-striped" cellspacing="0" width="100%">
           
                        <thead>
             
               <th  style="text-align: center; font-size: 14px; width: 250px;">Room Name</th>
               <th  style="text-align: center; font-size: 14px; width: 250px;">Date</th>
               <th  style="text-align: center; font-size: 14px; width: 250px;">Time</th>
               <th  style="text-align: center; font-size: 14px; width: 250px;">Downpayment</th>
               <th  style="text-align: center; font-size: 14px; width: 250px;">Status</th>
               <th style="text-align: center; font-size: 14px; width: 250px;">Action </th>
                        </thead>
                        <tbody>
          </tbody>
                    </table>
          
          </div>


                
       </div><!-- /.container-fluid -->

<div id="admin" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="Admin_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Add Rooms</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">


 




 <div class="form-group">
                  <label for="Last">Room Name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Room" name="Room" placeholder="Room">

                  </div>
              </div>

              
       <div class="form-group">
                  <label for="Last">Rate</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Rate" name="Rate" placeholder="Rate">
                  </div>
              </div>

 <div class="form-group">
                  <label for="Last">Max Person</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Person" name="Person" placeholder="Person">
                  </div>
              </div>

        
<div class="form-group">
                  <label for="Last">Description</label>
                  <div class="input-group">
         <textarea class="form-control" id="description" name="description" placeholder="Room Description"></textarea>
                  </div>
              </div>



    <div class="form-group">
                  <label for="Last">photo(optional)</label>
                  <div class="input-group">
         
<input type="file" class="form-control" name="file" id="file">
                  </div>
              </div>




         <p id="notes"></p>
  
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


<div id="update_admin" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="update_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Add Menu</h4>
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
                  <label for="Last">Expense</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Expenses" name="Expenses" placeholder="Total Expenses">
                  </div>
              </div>

               <div class="form-group">
                  <label for="Last">Quantity</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="QTys" name="QTys" >
                  </div>
              </div>







         <p id="notes"></p>
  
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


 $('#example1').DataTable({
        "ajax": {
            url: "reservation_fetch.php",
            type: "GET"
        },
        order: [[1, 'desc']],
        "paging": true,
     "paging": true,
        "lengthChange": true,
        "searching": true,
        "responsive": true,
        "ordering": true,
        "info": true
    });
});




$(document).on('submit', '#Admin_form', function(event){
  event.preventDefault();

    var Room = $('#Room').val(); 
   var Rate = $('#Rate').val(); 
       var Person = $('#Person').val(); 
       var description = $('#description').val(); 





  
  if(Room != '' && Rate != '' && Person != '' && description != '')
  {
   document.getElementById("notes").innerHTML = "Inserting Data Plse Wait.....";
   $.ajax({
    url:"insert/rooms.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
         Swal.fire('Data Saved Successfull!', '', 'success');
       $('#example1').DataTable().ajax.reload();
       $('#Admin_form')[0].reset();
          document.getElementById("notes").innerHTML = "";
   
    
    }
   });
  }
  else
  {
   Swal.fire('Fill All Data!', '', 'info');
  }
 });



function check(cal) {
   var x = parseInt(document.getElementById("Vials").value);
  var t = cal;
 var z = x * t;

document.getElementById("doses").value = z;
}


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
     $('#example1').DataTable().ajax.reload();
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
            url: 'fetch_single/menu.php',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',

            success: function (result) {
                document.getElementById('Names').value = result.name;
               document.getElementById('Prices').value = result.price;
         document.getElementById('Expenses').value = result.expense;
               document.getElementById('QTys').value = result.qty;
   






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
    success:function(data)
    {
         Swal.fire('Data Updated Successfull!', '', 'success');
       $('#example1').DataTable().ajax.reload();
      
    
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