 <?php 
  include'db/session.php';

$mysql = "SELECT * FROM details";
$querys = $connect->query($mysql);
  $abouts = $querys->fetch_assoc();
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="../images/<?php echo $abouts['Logo'];?>" />

  <title><?php echo $abouts['Restaurant_name'];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  
<!-- Page script -->


</head>
<body class="hold-transition sidebar-mini layout-fixed">
      <div class="search" hidden="">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
<div class="wrapper">
  
  <?php 
  include'script.php';
  ?>
<script type="text/javascript">
  
function countmessage() {


  setInterval(function(){


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("countmessage").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "count/countmessage.php", true);
  xhttp.send();

  },1000);

}
countmessage();

   $(document).ready(function(){
 
 function load_unseen_notification(view = '') 
 {
  $.ajax({
   url:"fetch/notif.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {

    $('#dropdown-menu').html(data.notification);

    if(data.unseen_notification > 0)
    {
   
       $('.count').html(data.unseen_notification);
      $('.mycount').html(data.total);
    } 


   if(data.sound == "yes"){
    
     jQuery('#audioBox')[0].play();
    
}
   }

  });
 }
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 1000);


});


  
</script>