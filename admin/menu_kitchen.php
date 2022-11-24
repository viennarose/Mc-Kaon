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
              <li class="breadcrumb-item active">Stocks Info</li>
            </ol>
          </div>
        </div>
    
  <!-- Employee Table-- > <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table-->







        <div class="card" style="">
            <div class="card-header " style="border:none;" >
              <div class="card-title " style="">
    
               </div>
               <div class="func" style=" ">
             

                    
</div>


                 
          <br>

        <table id="example1" class="table table-striped" cellspacing="0" width="100%">
           
                        <thead>

               <th  style="text-align: center; font-size: 14px; width: 250px;">Menu Name</th>
               <th  style="text-align: center; font-size: 14px; width: 250px;">Remaining</th>
              
               <th style="text-align: center; font-size: 14px; width: 250px;">Action </th>
                        </thead>
                        <tbody>
          </tbody>
                    </table>
          
          </div>


                
       </div><!-- /.container-fluid -->




<div id="update_admin" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="update_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
    
     <h4 class="modal-title">Update Stocks</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">


 
<div class="form-group" hidden="">
                  <label for="Last">QTYS</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="QTYS" name="QTYS" placeholder="Name" >

                  </div>
              </div>



 <div class="form-group">
                  <label for="Last">Menu Name</label>
                  <div class="input-group">
         
<input type="text" class="form-control" id="Names" name="Names" placeholder="Name" readonly="">

                  </div>
              </div>

              
       <div class="form-group">
                  <label for="Last">Add Quantity</label>
                  <div class="input-group">
         
<input type="number" class="form-control" id="Add_Quantity" name="Add_Quantity" placeholder="Add Quantity">
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
            url: "fetch/menu_kitchen.php",
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




 





function update(id) {
    if (id) {
        $("#id").remove();
        $.ajax({
            url: 'fetch_single/menu_kitchen.php',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',

            success: function (result) {
                document.getElementById('Names').value = result.name;
             
   

  document.getElementById('QTYS').value = result.qty;
             




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
    url:"update/menu_kitchen.php",
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