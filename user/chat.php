 <?php 
   include'db/session.php';
  include'header.php';
   include'sidebar.php';
    include'menubar.php';
  ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
 <div class="mydivssss">
    <section class="chat-area">
      <header>
     
        <a href="home.php" class="back-icon" style="color:#fff;"><i class="fas fa-arrow-left"></i></a>
        <img src="../images/<?php echo $abouts['Logo']; ?>"  class="img-circle elevation-2" alt="">
        <div class="details">
          <span><?php echo $abouts['Restaurant_name'] ?> </span>
          <p></p>
        </div>
      </header>
      <div class="chat-box" id="chat-box">

      </div>
      <form  id="myForm" method="POST" enctype="multipart/form-data" class="typing-area">
        <input type="text" class="incoming_id" id="incoming_id"  name="incoming_id" value="<?php echo $users['id'] ?>" hidden>
         <input type="text" class="incoming_id" id="photo"  name="photo" value="<?php echo $users['Photo'] ?>" hidden>
        <input type="text" name="message"  id="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button  type="submit"><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>


  

            <!-- /.card -->


              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
           
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php 
  include'footer.php';

  ?>
   <script src="javascript/chat.js"></script>
  <script type="text/javascript" language="javascript" >
$(document).on('submit', '#myForm', function(event){
  event.preventDefault();
   $.ajax({
    url:"php/insert-chat.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
      
    
       $('#myForm')[0].reset();
    }
   });

 });
  setInterval(function(){

   $.ajax({
    url:"fetch/getchat.php",
    method:'POST',
    data:{

      incoming_id:document.getElementById("incoming_id").value,
      photo:document.getElementById("photo").value

  },
   dataType:"text",
    success:function(data)
    {
      
    $("#chat-box").html(data);
    
    }
   });  
}, 500);
</script>
<script src="javascript/users.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 

 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

 <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>