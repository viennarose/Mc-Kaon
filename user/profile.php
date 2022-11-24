 <?php
include'db/session.php';
include'header.php';
include'menubar.php';
include'sidebar.php';


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../images/<?php echo $Photo;?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $LastName;?>, <?php echo $FirstName;?> <?php echo $MiddleName;?></h3>

                <p class="text-muted text-center"><?php echo $mytoken;?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>User Type</b> <a class="float-right">Customer</a>
                  </li>
                  <li class="list-group-item">
                    <b>Sign In Date</b> <a class="float-right"><?php echo $join_date;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">Active</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
          
                  <li class="nav-item"><a class="nav-link Active" href="#settings" data-toggle="tab">Profile Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
<form id="update_form" enctype="multipart/form-data">
                  <div class="tab-pane" id="settings">
                    
                       <input type="text" class="form-control" placeholder="Name" name="ids" id="ids" value="<?php echo $myid;?>" hidden="">
                        <div class="row">
                        <div class="col">
                          <div class="form-group row">
                        <label for="inputName">First Name</label>
                       
                          <input type="text" class="form-control" placeholder="Name" name="Fname" id="Fname" value="<?php echo $FirstName;?>">
                        
                      </div>
                      </div>
                      <div class="col">
                        <div class="form-group row">
                        <label for="inputName">Middle Name</label>
                       
                          <input type="text" class="form-control" placeholder="Middle Name" name="Mname" id="Mname" value="<?php echo $MiddleName;?>">
                        
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group row">
                        <label for="inputName">Surename</label>
                       
                          <input type="text" class="form-control" placeholder="Surname" name="Lname" id="Lname" value="<?php echo $LastName;?>">
                        
                      </div>
                      </div>
                      <div class="col">
                        <div class="form-group row">
                        <label for="inputName">Sex:</label>
                       
                        <select class="form-control" name="gender" id="gender">
                          <option hidden=""><?php echo $Gender;?></option>
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                        
                      </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" >Email</label>
                        
   
                          <input type="email" class="form-control"  placeholder="Email" name="Email" id="Email" value="<?php echo $Email;?>">
                       
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" >Contact Number</label>
                        
                          <input type="number" class="form-control"  placeholder="Mobile Number" name="Mobile" id="Mobile" value="<?php echo $Contact;?>">
                        
                      </div>
                     
                      <div class="form-group row">
                        <label for="inputExperience" >Address</label>
                     
                          <textarea class="form-control" placeholder="Address" id="Address" name="Address" ><?php echo $Address;?></textarea>
                       
                      </div>

 <div class="form-group row">
                      <label>City</label>
                        <select name="City" id="City" class="form-control">
                                                    <?php

$mysql1 = mysqli_query($connect, "SELECT * FROM `city` WHERE citymunCode = '$City'");
while ($rows = $mysql1->fetch_assoc()) {



  ?>
                          <option value="<?php echo $rows['citymunCode'];?>"><?php echo $rows['citymunDesc'];?></option>
                        <?php }?>

            <?php

$mysql = mysqli_query($connect, "SELECT `id`, `psgcCode`, `citymunDesc`, `regDesc`, `provCode`, `citymunCode` FROM `city`");
while ($row = $mysql->fetch_assoc()) {

  ?>

<option value="<?php echo $row['citymunCode'];?>"><?php echo $row['citymunDesc'];?></option>

<?php }?>
                        </select>


</div>




 <div class="form-group row">
                         <label>Barangay</label>
                      <select name="barangay" id="barangay" class="form-control">
                                     <?php

$mysql1 = mysqli_query($connect, "SELECT `id`, `brgyCode`, `brgyDesc`, `regCode`, `provCode`, `citymunCode` FROM `brgy` WHERE brgyCode ='$Barangay' ");
while ($rows = $mysql1->fetch_assoc()) {



  ?>
                          <option value="<?php echo $rows['brgyCode'];?>"><?php echo $rows['brgyDesc'];?></option>
                        <?php }?>

                                     <?php

$mysql1 = mysqli_query($connect, "SELECT `id`, `brgyCode`, `brgyDesc`, `regCode`, `provCode`, `citymunCode` FROM `brgy` ");
while ($rows = $mysql1->fetch_assoc()) {



  ?>
                          <option value="<?php echo $rows['brgyCode'];?>"><?php echo $rows['brgyDesc'];?></option>
                        <?php }?>


                      </select>
</div>
                      <div class="form-group row">
                        <label for="inputSkills" >UserName (Optional For Facebook Login)</label>
                        
                          <input type="text" class="form-control" placeholder="UserName (Optional For Facebook Login)" name="user" id="user" value="<?php echo $UserName;?>">
                        
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills">Password (Optional For Facebook Login)</label>
                  
                          <input type="password" class="form-control" placeholder="Password (Optional For Facebook Login)" name="pass" id="pass" value="<?php echo $Password;?>">
                      <input type="password" class="form-control" placeholder="Password (Optional For Facebook Login)" name="oldpass" id="oldpass" value="<?php echo $Password;?>" hidden="">
                      </div>
                 
                      <div class="form-group row" style="float: left; width: 250px;">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="submit" class="btn btn-primary" value="Update Profile">
                        </div>
                      </div>
                     
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <?php include'footer.php';?>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
        <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
        <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script -->
  <script type="text/javascript">
            
        $(document).ready(function() {

                $('#City').change(function() {
                    loadState($(this).find(':selected').val())
                })


            });

            function loadCountry() {
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=country"
                }).done(function(result) {


                    $(result).each(function() {
                        $("#City").append($(result));
                    })
                });
            }
            function loadState(countryId) {
                $("#barangay").children().remove()
                $.ajax({
                    type: "POST",
                    url: "../ajax.php",
                    data: "get=state&countryId=" + countryId
                }).done(function(result) {

                    $("#barangay").append($(result));

                });
            }
      
            loadCountry();
        </script>


          <script type="text/javascript">
            
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
    url:"update/profile.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
     beforeSend:function(){
$('.myloaders').show();
            },
    success:function(data)
    {
         Swal.fire('Your Personal Info Has Been Updated Successfully!', '', 'success');
      $('#example').DataTable().ajax.reload();
$('.loader').hide();
      
    
    }

   });
  }
  else
  {
   Swal.fire('Cancelled!', '', 'warning');
  }
  })

 });
          
        </script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
