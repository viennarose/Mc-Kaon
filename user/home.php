<?php
include'db/session.php';
include'header.php';

include'menubar.php';
include'sidebar.php';

?>

<style type="text/css">
  .box{

  }
  #mybutton, #select_year{

position: relative;

font-size: 14px;
box-sizing: border-box;
transition: .5s;

}
#select_year{
  outline: none;
  border-radius: 25px ;
   height: 40px;
  width: 150px;
   padding-left: 15px;
margin-left: 10px;
}
#mybutton{
  position: relative;
   border-radius: 0 25px 25px 0;
   width: 80px;
   height: 39px;
   border:none;
   outline: none;
   cursor: pointer;
   background: #ffc107;
   color: #fff; 


}

#barangay{

   height: 40px;
  width: 250px;
  padding: 2 25px;
  padding-left: 15px;
}
.mytitle{
  height: 40px;
  width: 280px;
  padding: 10px;
  padding-left: 0;
}
#legend ul {
        list-style: none;
      }

      #legend ul li {
        display: inline;
        padding-left: 30px;
        position: relative;
        margin-bottom: 4px;
        border-radius: 5px;
        padding: 2px 8px 2px 28px;
        font-size: 14px;
        cursor: default;
        -webkit-transition: background-color 200ms ease-in-out;
        -moz-transition: background-color 200ms ease-in-out;
        -o-transition: background-color 200ms ease-in-out;
        transition: background-color 200ms ease-in-out;
      }

      #legend li span {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 100%;
        border-radius: 5px;
      }
</style>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Our Menus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">


          <div class="form-group" style="width: 250px; float: right;">
                  <label for="Last">Category</label>
                  <div class="input-group">

<select class="form-control" style="width: 250px;" id="multi_search_filter" name="multi_search_filter">
  <option value="" selected="" hidden="">--Select Category--</option>
  <option value="">All</option>

<?php

$mysql = mysqli_query($connect, "SELECT * FROM category");
while ($row = $mysql->fetch_assoc()) {

  ?>
<option value="<?php echo $row['id'];?>"><?php echo $row['Category'];?></option>

<?php }?>
</select>
 <input type="hidden" name="hidden_country" id="hidden_country" />
</div>
</div>
<br>
<br>
<br>
<br>

          <div class="row d-flex align-items-stretch menuss">














          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="Move" class="modal fade">

 <div class="modal-dialog">
  <form id="cart_Data" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header" >
    <h3 style="font-size: 20px;">Order</h3>
    
      <button type="button" class="close" data-dismiss="modal" style="font-size: 20px;">&times;</button>
    </div>
    <div class="modal-body">
       <input type="text" name="move_id" id="move_id" class=" form-control" hidden="" >
 <input type="text" name="userid" id="userid" class=" form-control" value="<?php echo $users['id'];?>" hidden="">

       <div class="form-group">
        <label style="font-size: 18px;">Quantity</label>
      <input type="number" name="Quantity" id="Quantity" class=" form-control"  style="padding: 15px; font-size: 18px;">
  
   </div>
<br>
        </div>
<div class="modal-footer">
   <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-primary" value="Add To Cart" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
   




  $(document).on('submit', '#cart_Data', function(event){
  event.preventDefault();

    var move_id = $('#move_id').val(); 
   var Quantity = $('#Quantity').val(); 
   var userid = $('#userid').val(); 

  
  if(move_id != '' && Quantity != '' && userid !='')
  {
  
   $.ajax({
    url:"insert/cart.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
         Swal.fire('Added To Cart Successfull!', '', 'success');
 
   

    
    }
   });
  }
  else
  {
   Swal.fire('Fill All Data!', '', 'info');
  }
 });










  $(document).on('submit', '#Room_Data', function(event){
  event.preventDefault();

    var Room_id = $('#Room_id').val(); 
   var date = $('#date').val(); 
     

  
  if(Room_id != '')
  {
  
   $.ajax({
    url:"insert/reservation.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
         Swal.fire('Request Successfully Sent!', '', 'success');
 
   

    
    }
   });
  }
  else
  {
   Swal.fire('Fill All Data!', '', 'info');
  }
 });
</script>
 <script type="text/javascript" language="javascript" >

$(document).ready(function(){

  load_data();
  
  function load_data(query='')
  {
    $.ajax({
      url:"fetch/menu.php",
      method:"POST",
      data:{query:query},
      success:function(data)
      {
        $('.menuss').html(data);
      }
    })
  }

  $('#multi_search_filter').change(function(){
    $('#hidden_country').val($('#multi_search_filter').val());
    var query = $('#hidden_country').val();
    load_data(query);
  });
  
});


</script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="../myjs/sweetalert2@11.js"></script>


 <script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="../myjs/sweetalert2@11.js"></script>


<script type="sweetalert.js"></script>
<script type="sweetalert.min.js"></script>
<script src="myjs/sweetalert2@11.js"></script>

 
<script src="../Admin/myjs/jquery-3.5.1.js"></script>


<script src="../myjs/sweetalert2.min.js"></script>
 <script src="../myjs/jquery.min.js"></script>
  <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>