<style type="text/css">
  
  .mydrop:hover{
background: #898D8E;
  }
  .dropout:hover{
background: #fff;
  }
</style>

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
     
    </ul>
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
      
        <div class="input-group-append">
         
        </div>
      </div>
    </form>



    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

       <li class="nav-item dropdown dropout">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge count"></span>
        </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right dropout">
          <span class="dropdown-item dropdown-header mycount">Notifications</span>
          <div class="dropdown-divider"></div>
       <div class="dropdown-item" style="color: #000; font-size: 25px;">

        <span class=" label-danger " id="dropdown-menu"  style="color: #000; font-size: 25px;"><p></p></span> 
        <span class="" style="color: #000; font-size: 25px;"> </span>
      </div>
       <div class="dropdown-menu dropout"></div>
     
         
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge" id="countmessage"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right users-list ">
        
        
        

         

        </div>
      </li>

    <!-- Right navbar links -->
 <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="../images/<?php echo $abouts['Logo'];?>" alt="AdminLTE Logo" width="25" height="25" class="brand-image img-circle"
           style="opacity: .8; ">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="logout.php" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> LOGOUT
          
          </a>
         
          
        </div>
      </li>

    </ul>
  </nav>
  <audio id="audioBox">
  <source src="notification.mp3" type="audio/mpeg" controls>

</audio>

<script src="//code.jquery.com/jquery-3.4.1.min.js"></script>