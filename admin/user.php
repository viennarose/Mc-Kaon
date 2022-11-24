<?php
include'header.php';
include'sidebar.php';
include'menubar.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <?php  include("sidebar.php"); ?>

<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
    
  <!-- Employee Table-- ><!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table-->

        <div class="card card-default" style=" box-shadow: -1px -1px  5px 10px #AFAFBD;">
          <div class="card-header " style="background: #F0F0F5; box-shadow: box-shadow: 5px 10px #888888;">
            <h3 class="card-title" style="font-weight: bold;">User</h3>

            
        
               </div>

               <div class="func" style="margin-top: 10px;">

                 &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn btn-primary btn-sm d-block-inline ml-2" data-toggle="modal"
                            data-target="#admin">
                            <i class="fa fa-plus"></i> Add User
                        </button>
                 </div>
                  <div class="card-body" style="">
 
            <!-- /.card-header -->
            <table id="example1" class="table table-striped" style="width:100%; font-size: 15px;text-align: center; ">
           
                        <thead>
                          
                            <th style="text-align: center;">Unique I.D</th>
              <th style="text-align: center;">Department</th>
             <th style="text-align: center;">Tools</th>
              
                        </thead>
                    </table>
          
          </div>

                
       </div><!-- /.container-fluid -->
    </section>
</div>
 <div id="admin" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="Admin_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Add User</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">

  

              <div class="form-group">
                  <label for="Last">Department</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="fname" name="fname" placeholder="Department">
                  </div>
              </div>



       <div class="form-group">
                  <label for="Last">Abrivation</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="lname" name="lname" placeholder="I.C.T.D">
                  </div>
              </div>

               <div class="form-group">
                  <label for="Last">Username (Email)</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Email" name="Email" placeholder="juan_delacruz@negros.gov.ph">
                  </div>
              </div>



     <div class="form-group">
                  <label for="Last">Password</label>
                  <div class="input-group">
         
<input type="Password" class="form-control" id="Password" name="Password" placeholder="*****">
                  </div>
              </div>





    <div class="form-group">
                  <label for="Last">Logo</label>
                  <div class="input-group">
         
<input type="file" class="form-control" name="file[]" id="file" multiple>
                  </div>
              </div>

<br>
              

             

          
<br>


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

 <div id="update" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="update_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Update User</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">

  
<input type="text" class="form-control" id="idsss" name="idsss" placeholder="" hidden="">

              <div class="form-group">
                  <label for="Last">Department</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="fnames" name="fnames" placeholder="Department">
                  </div>
              </div>



       <div class="form-group">
                  <label for="Last">Abrivation</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="lnames" name="lnames" placeholder="I.C.T.D">
                  </div>
              </div>

               <div class="form-group">
                  <label for="Last">Username (Email)</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Emails" name="Emails" placeholder="juan_delacruz@negros.gov.ph">
                  </div>
              </div>



     <div class="form-group">
                  <label for="Last">Password</label>
                  <div class="input-group">
         
<input type="Password" class="form-control" id="Passwords" name="Passwords" placeholder="*****">
                  </div>
              </div>



<div class="form-group">
                  <label for="Last">logos</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="logos" name="logos">
                  </div>
              </div>

    <div class="form-group">
                  <label for="Last">Logo</label>
                  <div class="input-group">
         
<input type="file" class="form-control" name="file" id="file" >
                  </div>
              </div>

<br>
              

             

          
<br>


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



<
  <?php
include'footer.php';


  ?>
  <script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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
            url: "fetch/user.php",
            type: "GET"
        },
        
        "paging": true,
     "paging": true,
        "lengthChange": true,
        "searching": true,
        "responsive": true,
        "ordering": true,
        "info": true
    });


   setInterval(function(){
$('#example1').DataTable().ajax.reload();
  },20000);
});




$(document).on('submit', '#Admin_form', function(event){
  event.preventDefault();

    var des = $('#des').val(); 
   
       

  
  if(des != '')
  {
   document.getElementById("notes").innerHTML = "Uploading Files Plse Wait.....";
   $.ajax({
    url:"insert/files.php",
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
    url:"delete/files.php",
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
            url: 'fetch_single/user.php',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',

            success: function (result) {
                document.getElementById('fnames').value = result.fname;
               document.getElementById('lnames').value = result.lname;
         document.getElementById('Emails').value = result.email;
               document.getElementById('Passwords').value = result.password;
                 document.getElementById('logos').value = result.img;
             
  document.getElementById('idsss').value = result.id;





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
    url:"update/user.php",
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
<script src="javascript/users.js"></script>

 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css  ">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>