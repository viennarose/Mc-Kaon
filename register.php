<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mac-Kaon</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style type="text/css">

</style>
<body class="hold-transition "  style="background-color: #E1DFDF;">
  <br>


  <div class="container">
    <div class="row ">
      <div class="col-12">
        <div class="card card-registration" style="border-radius: 15px; box-shadow: 5px 5px 5px 5px #C7C4C4; background-color: #F3F2F2;">
          <div class="card-body">
            <h2 class="text-center">Registration</h2>
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                  <form id="registration" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                          <label class="form-label" for="form3Examplev2">First name</label>
                  <input type="text" class="form-control" placeholder="First name" name="First" id="First" required="">
                      
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                           <label class="form-label" for="form3Examplev3">Middle name</label>
                        <input type="text" class="form-control" placeholder="Middle name" name="Middle" id="Middle" required="">
                     
                      </div>

                    </div>
                  </div>

                 
   <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                         <label class="form-label" for="form3Examplev2">Last name</label>
                  <input type="text" class="form-control" placeholder="First name" name="Last" id="Last" required="">
                       
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <label class="form-label" for="form3Examplev3">Gender</label>
                       <select class="form-control" name="gender" id="gender">
                        <option>-- Select Gender --</option>
                         <option>Male</option>
                          <option>Female</option>
                       </select>
                        
                      </div>

                    </div>
                  </div>
                  <div class="row">

                 <div class="col-md-6 mb-4 pb-2">
                  <label class="form-label" for="form3Examplea2">Username</label>
                <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="Username" id="Username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      </div>
       <div class="col-md-6 mb-4 pb-2">
        <label class="form-label" for="form3Examplea2">Password</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
</div>
   <a href="login.php"  style=" text-decoration: underline;  ">I already have an Account</a>
</div>


                </div>
              </div>

              <div class="col " style="border-left: 1px solid #9D9D9D;">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                   <div class="row">
                    <div class="col">

                  
                    <div class="form-outline form-white">
                       <label class="form-label" for="form3Examplea2">City/Municipality</label>
                     <select type="text" name="City" id="City" class="form-control">
                                    <option>-- Select City/Municipality --</option>
                                </select>
                     
               
                  </div>
                </div>
 <div class="col">
                
                    <div class="form-outline form-white">
                       <label class="form-label" for="form3Examplea2">Barangay</label>
                     <select name="barangay" id="barangay" class="form-control">
                      <option>-- Select Barangay -- </option>
         
         </select>
                     
                   
                  </div>
                </div>
</div>
 
  <label class="form-label" for="form3Examplea3">House Number & Street</label>
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea3" class="form-control form-control-lg" name="Address" id="Address" />
                      
                    </div>
              

                  <div class="row">
                    <div class="col">
<label class="form-label" >Email</label>
                      <div class="form-outline form-white">
<input type="email" class="form-control" placeholder="Email" name="Email" id="Email" required="">
         
        </div>

                    </div>
                  
           <div class="col">
<label class="form-label" for="form3Examplea2">Contact Number</label>
                      <div class="form-outline form-white">
          <input type="text" class="form-control" placeholder="Contact Number" name="Contact" id="Contact" required="">
         
        </div>
        </div>

          </div>

         <br>
           <div class=" text-center">
           

         <input type="submit" class="btn btn-danger btn-block" value="Register">
 <p>- OR -</p>
       <a href="<?php echo $login_url;?>" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        
      </div>

    
    </div>
        </div>
     
     
      </form>

      
       

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- /.register-box -->

<!-- jQuery -->

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
                    url: "ajax.php",
                    data: "get=state&countryId=" + countryId
                }).done(function(result) {

                    $("#barangay").append($(result));

                });
            }
      
            loadCountry();
        </script>


 <script type="text/javascript" language="javascript" >
  $(document).on('submit', '#registration', function(event){
  event.preventDefault();

    var Fullname = $('#Fullname').val(); 
  
       var Contact = $('#Contact').val(); 

    var Email = $('#Email').val(); 
   var Username = $('#Username').val(); 
       var Password = $('#Password').val(); 
 
  var Address = $('#Address').val(); 



  
  if(Fullname != '' && Contact != '' && Email != '' && Username != '' && Password != '' && Address != '')
  {
  
   $.ajax({
    url:"insert/register.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
       
Swal.fire('You Have Successfully Registered!', '', 'success');
    window.location = "login.php";

   
    
    }
   });
  }
  else
  {
   Swal.fire('Fill All Data!', '', 'info');
  }
 });
</script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="/myjs/sweetalert2@11.js"></script>

<script src="Admin/myjs/sweetalert2.min.js"></script>
 <script src="Admin/myjs/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Admin/myjs/datatables.min.css"/>
<link rel="stylesheet" href="Admin/myjs/jquery.dataTables.min.css">
 
<script src="Admin/myjs/jquery-3.5.1.js"></script>
 



</body>
</html>
