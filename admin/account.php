 <?php
include'header.php';
include'menubar.php';
include'sidebar.php';


?>
 <style>
  
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
              <li class="breadcrumb-item active">Accounts Info</li>
            </ol>
          </div>
        </div>
    
  <!-- Employee Table-- > <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table-->







        <div class="card" style="">
            <div class="card-header " style="border:none;" >
              <div class="card-title " style="">
    
               </div>
               <div class="func" style=" ">
                 &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn btn-primary btn-sm d-block-inline ml-2" data-toggle="modal"
                            data-target="#admin">
                            <i class="fa fa-plus"></i> Add Account
                        </button>

                    
</div>


                 
          <br>

        <table id="example1" class="table table-striped" cellspacing="0" width="100%">
           
                        <thead>
             
               <th  style="">Fullname</th>   
                <th style=" ">Position</th>   
               <th style="">Action</th>
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
    
     <h4 class="modal-title">Add Accounts</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">


 




 <div class="form-group">
                  <label for="Last">First name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="First_name" name="First_name" placeholder="First name">

                  </div>
              </div>

            
 <div class="form-group">
                  <label for="Last">Middle Initial</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Middle_name" name="Middle_name" placeholder="M.I">

                  </div>
              </div>


               <div class="form-group">
                  <label for="Last">Last name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last name">

                  </div>
              </div>
              


  <div class="form-group">
                  <label for="Last">User Role</label>
                  <div class="input-group">
         
<Select type="text" class="form-control" id="Role" name="Role" >
  <option value="-- Select User Role --">-- Select User Role --</option>
  <option value="Administrator">Administrator</option>


<option value="Kitchen">Kitchen</option>

</Select>

                  </div>
              </div>



       <div class="form-group">
                  <label for="Last">Username</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Username" name="Username" placeholder="">
                  </div>
              </div>

 <div class="form-group">
                  <label for="Last">Password</label>
                  <div class="input-group">
         
<input type="Password" class="form-control" id="Password" name="Password" placeholder="">
                  </div>
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

<div id="edit" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="update_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Update Accounts</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">


 




 <div class="form-group">
                  <label for="Last">First name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="First_name_" name="First_name_" placeholder="First name">

                  </div>
              </div>

            
 <div class="form-group">
                  <label for="Last">Middle Initial</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Middle_name_" name="Middle_name_" placeholder="M.I">

                  </div>
              </div>


               <div class="form-group">
                  <label for="Last">Last name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="LastName_" name="LastName_" placeholder="Last name">

                  </div>
              </div>
              


  <div class="form-group">
                  <label for="Last">User Role</label>
                  <div class="input-group">
         
<Select type="text" class="form-control" id="Role_" name="Role_" >
  <option value="-- Select User Role --">-- Select User Role --</option>
  <option value="Administrator">Administrator</option>


<option value="Kitchen">Kitchen</option>

</Select>

                  </div>
              </div>



       <div class="form-group">
                  <label for="Last">Username</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Username_" name="Username_" placeholder="">
                  </div>
              </div>

 <div class="form-group">
                  <label for="Last">Password</label>
                  <div class="input-group">
         
<input type="Password" class="form-control" id="Password_" name="Password_" placeholder="">
                  </div>
              </div>

  <input type="Password" class="form-control" id="oldpass" name="oldpass" placeholder="" hidden="">
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="update" />
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

    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })



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
            url: "fetch/accounts.php",
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
});




$(document).on('submit', '#Admin_form', function(event){
  event.preventDefault();

    var First_name = $('#First_name').val(); 
   var Username = $('#Username').val(); 
       var Password = $('#Password').val(); 
      
       var Role = $('#Role').val(); 
 
      
       var LastName = $('#LastName').val(); 






  
  if(First_name != '' && LastName != '' && Username != '' && Password != '' && Role != '-- Select User Role --')
  {
  
   $.ajax({
    url:"insert/account.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
         Swal.fire('Data Saved Successfull!', '', 'success');
       $('#example1').DataTable().ajax.reload();
       $('#Admin_form')[0].reset();
       
   
    
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
    url:"delete/account.php",
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
            url: 'fetch_single/accounts.php',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',

            success: function (result) {
                document.getElementById('First_name_').value = result.First_name;
               document.getElementById('Middle_name_').value = result.Middle_name;
         document.getElementById('LastName_').value = result.LastName;
               document.getElementById('Role_').value = result.Account_Type;
   
  document.getElementById('Username_').value = result.Username;
               document.getElementById('Password_').value = result.Password;

 document.getElementById('oldpass').value = result.Password;








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
    url:"update/account.php",
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