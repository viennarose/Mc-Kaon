<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
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
body {
  background-image: url('download.jpg');
}
span{
  color: #FFF;
}
</style>
<body class="hold-transition register-page" style=" background-image: url('download.jpg'); background-size: cover; background-repeat: no-repeat;">
  <br>

<div class="register-box" style="background:transparent;">


  <div class="card" style="background:transparent;">
    <div class="card-body register-card-body" style="background:transparent; background: rgba(0,0,0,0.8); color: #FFF;">
      <p class="login-box-msg">Register a new membership</p>

      <form id="registration" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name (Last Name, First Name, M.I)" name="Fullname" id="Fullname" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="Email" id="Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Complete Address" name="Address" id="Address" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>

         <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Contact Number" name="Contact" id="Contact" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-mobile-alt"></span>

            </div>
          </div>
        </div>
<div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="Username" id="Username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required="">
              <label for="agreeTerms">
               I agree to the <a href="#" style="color: #FFF;">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" value="Register">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        
      </div>

      <a href="login.php" class="text-center" style="color: #FFF; text-decoration: underline;">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
 <script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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
         Swal.fire('Registration Saved Successfull!', '', 'success');
 
   
    
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
 
 <script src="Admin/myjs/jquery.dataTables.min.js"></script>
 <script src="Admin/myjs/dataTables.responsive.min.js"></script>


 <script src="Admin/myjs/dataTables.buttons.min.js"></script>

 <script type="" src="Admin/myjs/jszip.min.js"></script>
 <script  src="Admin/myjs/pdfmake.min.js"></script>
  <script src="Admin/myjs/vfs_fonts.js"></script>
  <script src="Admin/myjs/buttons.html5.min.js"></script>
  <script src="Admin/myjs/buttons.print.min.js "></script>
  <script src="plugins/select2/js/select2.full.min.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css  ">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

</body>
</html>
