<style type="text/css">


.myhome a{
  color: #469FE8;
}
  .myhome a:hover{
     color: #044274;  
    text-decoration: underline;

  }
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block myhome">
        <a href="home.php"  class="nav-link " style=" font-weight: bold;">Home</a>
    
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
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
          <img src="../images/<?php echo $image;?>" alt="AdminLTE Logo" width="25" height="25" class="brand-image img-circle"
           style="opacity: .8; ">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Menubar</span>
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          <a href="profile" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 
           EDIT ACCOUNT
          </a>
          <div class="dropdown-divider"></div>
          <a href="logout.php" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> LOGOUT
          
          </a>
         
          
        </div>
      </li>
    </ul>
  </nav>