<?php include'header.php'?>
<?php include'sidebar.php'?>
<?php include'menubar.php'?>
<style type="text/css">
	#labelforfile{
color: white;
height: 30px;
width: 150px;
background-color: #15AED8;\
position: absolute;

margin:auto;
text-align: center;
margin-top: 10px;
bottom: 0;
left: 0;
right: 0;
display: flex;
justify-content: center;
align-items: center;

}
#labelforfile:hover{
  cursor: pointer;
}
input[type="file"]{
  display: none;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><a href="#"><?php echo $abouts['Restaurant_name']?></a> Information</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          	<form id="myForm" method="POST"  enctype="multipart/form-data" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Restaurant Name</label>
                 <input type="text" class="form-control" name="Restaurant_name" id="Restaurant_name" value="<?php echo $abouts['Restaurant_name']?>">
                </div>   
     </div>
 <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                 <input type="text" class="form-control" name="Address" id="Address" value="<?php echo $abouts['Address']?>">
                </div>
                <!-- /.form-group -->
               
     </div>
      <div class="col">
                <div class="form-group">
                  <label>Contact Number</label>
                 <input type="text" class="form-control" name="Contact_info" id="Contact_info" value="<?php echo $abouts['Contact_info']?>">
                </div>
                <!-- /.form-group -->
               
     </div>

  <div class="col">
                <div class="form-group">
                  <label>Telephone Number</label>
                 <input type="text" class="form-control" name="Tel" id="Tel" value="<?php echo $abouts['Tel']?>">
                </div>
                <!-- /.form-group -->
               
     </div>
     <div class="col">
                <div class="form-group">
                  <label>Email Address</label>
                 <input type="text" class="form-control" name="Email" id="Email" value="<?php echo $abouts['Email']?>">
                </div>
                <!-- /.form-group -->
               
     </div>
 </div>
 <div class="row">
 	<div class="col-md-6">
                <div class="form-group">
                  <label>Opening Hours</label>
                <textarea class="form-control" name="Hrs" cols="5" id="Hrs" rows="10"><?php echo $abouts['Hrs']?></textarea>
                </div>
                <!-- /.form-group -->
               
     </div>
     	<div class="col-md-6">
                <div class="form-group">
                  <label>About <?php echo $abouts['Restaurant_name']?></label>
                <textarea class="form-control" name="About" id="About" cols="5" rows="10"><?php echo $abouts['About']?></textarea>
                </div>
                <!-- /.form-group -->
               
     </div>
     	<div class="col-md-6">
                <div class="form-group">
                  <label>Motto</label>
                <textarea class="form-control" name="Moto" id="Moto" cols="5" rows="10"><?php echo $abouts['Moto']?></textarea>
                </div>
                <!-- /.form-group -->
               
     </div>
     <div class="col-md-6">
                <div class="form-group">
                  <label>Offers</label>
                <textarea class="form-control" name="Offers" id="Offers" cols="5" rows="10"><?php echo $abouts['Offers']?></textarea>
                </div>
                <!-- /.form-group -->
               
     </div>
      <div class="col-md-6">
                <div class="form-group">
                  <label>Rooms</label>
                <textarea class="form-control" name="Rooms" id="Rooms" cols="5" rows="10"><?php echo $abouts['Rooms']?></textarea>
                </div>
                <!-- /.form-group -->
               
     </div>

       <div class="col-md-6">
       	<center>
                <div class="form-group">
           <input type="text" name="logos" id="logos" value="<?php echo $abouts['Logo'];?>" hidden="">      
              
<input type="file" name="file" id="file"    />
  <label for="file" id="labelforfile"><i class="fas fa-camera"></i>&nbsp;  Upload Photo</label><br>
<img id="show" src='../images/<?php echo $abouts['Logo'];?>'  width="200px" height="200px" style="border: 1px solid #BBC1BE;">  <br>
 <label>Restaurant Logo</label>
                </div>
         </center>       <!-- /.form-group -->
               
     </div>

 </div>
 <button type="submit" class="btn btn-success">Update</button>
</div>

</div>
</form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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

  <script>
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

  function readURL(input) {
      if(input.files && input.files[0]){
        var reader = new FileReader();

          reader.onload = function(e){
            $('#show').attr('src',e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
    }

    $('#file').change(function(){
        readURL(this);
    });

    $(document).on('submit', '#myForm', function(event){
  event.preventDefault();
  
Swal.fire({
  title: 'Are you sure You want to Update this data?',
  text: '',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Insert it!'
}).then((result) => {
  if (result.isConfirmed) {
     $.ajax({
    url:"update/Infromartion.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
           Swal.fire('Data Saved Successfull!', '', 'success');
    
       $('#myForm')[0].reset();
    
    }

   });
  }
  else
  {
   Swal.fire('Canceled!', '', 'info');
  }
  })

 });
</script>
