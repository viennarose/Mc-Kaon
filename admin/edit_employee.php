 <?php
include'header.php';
include'sidebar.php';
include'menubar.php';

$emp_id = $_GET['id'];
$sql = mysqli_query($connect, "SELECT * FROM employee_info where id = '$emp_id'");

while ($row = $sql->fetch_assoc()) {
 $employee_id = $row['id'];
 $First_Name = $row['First_Name'];
 $Middle_name = $row['Middle_name'];
 $Last_Name = $row['Last_Name'];
 $extension = $row['extension'];
 $address = $row['address'];
 $contact_Number = $row['contact_Number'];
 $Email_address = $row['Email_address'];
 $Position = $row['Position'];
 $Photo = $row['Photo'];
 $Gender = $row['Gender'];
 $Date_started = $row['Date_started'];

 } 

?>
<style type="text/css">


#labelforfile{
color: white;
height: 30px;
width: 150px;
background-color: #15AED8;\
position: absolute;

margin:auto;
text-align: center;

bottom: 0;
left: 0;
right: 0;
display: flex;
justify-content: center;
align-items: center;
margin-top: 4px;
}
#labelforfile:hover{
  cursor: pointer;
}
#show-image{

  border: 1px solid #BBC1BE;

}
h6{
  font-weight: 600px;

}
input[type="file"]{
  display: none;
}
input[type="submit"]{
  left:2px;
  width: 150px;
}
input[type="button"]{
  left:2px;
  width: 150px;
}
</style>
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
              <li class="breadcrumb-item active">Employee Data Sheet</li>
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
            <h3 class="card-title">Employee Data</h3>

            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <form id="myForm" method="POST"  enctype="multipart/form-data" >
               
               
                
<input type="text" name="employee_id" id="employee_id" value="<?php echo $employee_id;?>" hidden="">
 
            <div class="row">
              <div class="col">
                 <div class="form-group">
                  <label for="Last">Surname</label>
                <div class="input-group">
                    
                    <div class="input-group-prepend">
                      <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></span>
                    </div>
<input type="text" class="form-control"  id="lname" name="lname" placeholder="Surname" value="<?php echo $Last_Name ;?>">

                  </div>
                  <!-- /.input group -->
                </div>
    <!-- /.input group -->
                </div>
                <!-- /.form group -->

   <div class="col">
                <div class="form-group">
                  <label for="Last">First Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></span>
                    </div>
<input type="text" class="form-control"  id="fname" name="fname" placeholder="First Name" value="<?php echo $First_Name ;?>">
  
                  </div>
              </div>
              <!-- /.col -->
            </div>


             <div class="col">
                <div class="form-group">
                  <label for="Last">Middle Name</label>
                  <div class="input-group">
                     
                    <div class="input-group-prepend">

                      <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></span>
                    </div>

 <input type="text" class="form-control"  id="mname" name="mname" placeholder="Middle Name" value="<?php echo $Middle_name ;?>">

                  </div>
              </div>
              <!-- /.col -->

            </div>

 
<div class="col">
                <div class="form-group">
                  <label for="Last">Name Extention</label>
                  <div class="input-group">
                     
                    <div class="input-group-prepend">

                      <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></span>
                    </div>

 <input type="text" class="form-control" placeholder="Example: JR  "  id="ext" name="ext" placeholder="Name Extention" value="<?php echo $extension ;?>">

                  </div>
              </div>
              <!-- /.col -->

            </div>




            <!-- /.row -->
          </div>
         
 <div class="row">


 



<div class="col">
                   <div class="form-group">
                  <label>Sex</label>
                 
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-mars-double'></i></span>
                    <select class="form-control select2"  id="Sex"  name="Sex">
                      <option selected="selected" hidden="" ><?php echo $Gender ;?></option>
            
                      <option value="Male" style="font-size: 16px;">Male</option>
                      <option value="Female" style="font-size: 16px;">Female</option>
              
                    </select>
                    
               
                </div>


              </div>


             
  



</div>

<div class="col">
  
   <div class="form-group">
                  <label>Employee Position</label>
                 
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-user-tie'></i> </span>
                    <select class="form-control select2"  id="Position"  name="Position">
                      <?php 
                      $sql = "SELECT * FROM position where id ='$Position'";
 $resultsss = mysqli_query($connect, $sql);
while($get_sqlssss =$resultsss->fetch_assoc())          {

$pos_id = $get_sqlssss['id'];
$position_name = $get_sqlssss['position'];
}?>
                      <option selected="selected" hidden="" value="<?php echo $pos_id ;?>"><?php echo $position_name ;?></option>
                     <?php   

 $sql = "SELECT * FROM position";
 $resultss = mysqli_query($connect, $sql);
while($get_sqlss =$resultss->fetch_assoc())          {


$position = $get_sqlss['position'];
$id = $get_sqlss['id'];

                   ?>
                      <option value="<?php echo $id ;?>" style="font-size: 16px;"><?php echo $position; ?></option>
                 <?php }?>
                    </select>
                </div>
              </div>

</div>
</div>

<div class="row">
           
<div class="col">
  
   <div class="form-group">
                  <label>Contact Number</label>
                 
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
  <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z"/>
</svg>

                      </span>
                   <input type="text" name="Contact_number" id="Contact_number" class="form-control" value="<?php echo $contact_Number ;?>">
                </div>
              </div>

</div>
<div class="col">
                   <div class="form-group">
                  <label>Email Address</label>
                 
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-exclamation-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
</svg>
                      </span>
                    <input type="Email" class="form-control" style="width: 100%;" id="Email" name="Email" value="<?php echo $Email_address ;?>">
                    </div>             
  </div>
</div>

<div class="col">
                   <div class="form-group">
                  <label>Address</label>
                 
                    <div class="input-group-prepend">
                      <span class="input-group-text">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                      </span>
                    <input type="text" class="form-control" style="width: 100%;" id="Address" name="Address" value="<?php echo $address ;?>">
                    
               
                </div>


              </div>
</div>
</div>
<div class="row">
<div class="col">
                   <div class="form-group">
                  <label>Date Started</label>
                 
                    <div class="input-group-prepend">
                      <span class="input-group-text">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                      </span>
                    <input type="date" class="form-control" style="width: 100%;" id="Started" name="Started" value="<?php echo $Date_started ;?>">
                    
               


                </div>

</div>
              </div>

<div class="col">
  <center>
                   <div class="form-group">
        <input type="text" name="myphoto" id="myphoto" value="<?php echo $Photo ;?>" hidden="">           
                  
<h6 for="Last" style="">Add Photo</h6>

 <img id="show" src='../images/<?php echo $Photo ;?>'  width="180px" height="180px" style="margin-top: 5px;">  
<input type="file" name="file" id="file"    />
  <label for="file" id="labelforfile"><i class="fas fa-camera"></i>&nbsp;  Choose Photo</label>
</div>
</center>
              </div>

</div>
</div>
<br>
<center>
      <button type="submit" class="btn btn-success" value="" style="width: 250px;"><i class="fa fa-edit"></i> Update Employee Info</button>

</center>


<br>

</div>


     
</div>
</form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <br>
    </section>
    <!-- /.content -->
  </div>
  <?php include'footer.php';?>
<link rel="stylesheet" type="text/css" href="sweetalert.css">
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="myjs/sweetalert2@11.js"></script>

<script src="myjs/sweetalert2.min.js"></script>
 <script src="myjs/jquery.min.js"></script>

<!-- Page script -->


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



$(document).on('submit', '#myForm', function(event){
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
    url:"update/employee.php",
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



$('#checkme').click(function(){



var street = document.getElementById('Street').value;
var Barangay = document.getElementById('Barangay').value;
var City = document.getElementById('City').value;
var zip = document.getElementById('zip').value;
var tel = document.getElementById('tel').value;

document.getElementById('PermanentStreet').value = street;

document.getElementById('PermanentBarangay').value = Barangay;

document.getElementById('PermanentCity').value = City;

document.getElementById('Permanentzip').value = zip;
document.getElementById('permanenttel').value = tel;


});
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


</script>