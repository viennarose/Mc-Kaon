 <?php
 include'db/session.php';
include'header.php';
include'menubar.php';
include'sidebar.php';


?>
 <style>
        .dataTables_length {
            margin-bottom: 30px;
        }
        
        .dataTables_length select {
            border: 1px solid #e4e4e4;
        }
        
        .dt-buttons a {
            margin-left: 12px;
            font-size: 12px;
            padding: 6px;
            border: 1px solid #e4e4e4;
            background: #FFF;
            box-shadow: 0px 0px 14px 0px #ececec;
        }
        
        .dataTables_filter input {
            border: 1px solid #e4e4e4;
        }
        
        .table-striped tbody tr {
            line-height: 30px;
        }
         .table-striped td{
          text-align: center;
         }
         td{
          color: #000;
          text-align: center;
          font-size: 13px;
         }th{
         font-size: 13px;
         }
         .loader{
       display: none;
      }
    </style>


<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
          </div>
        </div>
    
  <!-- Employee Table--><!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table--> <!-- Employee Table-->







       







<div class="row">
 <?php 
include'db/connect.php';
 $product = $connect->query("SELECT `id`, `name`, `description`, `price`, `photo`, `date` FROM `rooms` Order By name ASC ");
                while($row=$product->fetch_assoc()):
                  
                   $Description = $row['description'];
               $names = $row['name'];
              $price = $row['price'];
              $picture = $row['photo'];
                $id = $row['id'];
                
              
          ?>

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch box" >
              <div class="card bg-light" style="max-width:450px; min-width:250px; width: 450px;">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    
                    <div class="col text-center">
                      <img src="../images/<?php echo $picture;?>" alt="" class="" style="max-width: 400px; min-width:200px; width: 250px; height: 250px;">
                    </div>
                    <div class="col-7">
                      <br>
                      <h2 class="lead" ><b style="<?php echo $cashout;?>"><?php echo $names;?>  </b> </h2>
                    
                      <p class="text-muted text-sm"><b>About: </b> <?php echo $Description?> </p>
                      
                        <p class="small text-muted" style="<?php echo $cashout;?>"><b>Price: &#8369;<?php echo $price;?></b></p>
                    
                 
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="chat" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary mycarts" data-id="<?php echo $row['id'] ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Reserve
                    </a>
                  </div>
                </div>
              </div>
            </div>

 <?php endwhile;?>
</div>
<div id="Move" class="modal fade">

 <div class="modal-dialog">
  <form id="cart_Data" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header" >
    <h3 style="font-size: 20px;">Reserve Room</h3>
    
      <button type="button" class="close" data-dismiss="modal" style="font-size: 20px;">&times;</button>
    </div>
    <div class="modal-body">
       <input type="text" name="move_id" id="move_id" class=" form-control" hidden="" >
 <input type="text" name="userid" id="userid" class=" form-control" value="<?php echo $users['id'];?>" hidden="">

       <div class="form-group">
        <label style="font-size: 18px;">Date</label>
      <input type="date" name="date" id="date" class=" form-control "  style="padding: 15px; font-size: 18px;">
  
   </div>

       <div class="form-group">
        <label style="font-size: 18px;">Time</label>
      <input type="time" name="time" id="time" class=" form-control"  style="padding: 15px; font-size: 18px;">
  
   </div>
   
       <div class="form-group">
        <label style="font-size: 18px;">Number of Person</label>
      <input type="number" name="Person" id="Person" class=" form-control"  style="padding: 15px; font-size: 18px;">
  
   </div>
<br>
        </div>
<div class="modal-footer">
   <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-primary" value="Add Reservation" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
      </div>
    </form>
  </div>
</div>
  
    </section>
  </div>
 


</div>
<script type="text/javascript">
	 $("div.card .mycarts").click(function(e){
    e.preventDefault()
  
   $('#Move').modal('show');
   var move_id = $(this).attr('data-id');
   $("#move_id").val( move_id );
  })
</script>
  <?php
include'footer.php';


  ?>
  
  <script type="text/javascript" language="javascript" >




$(document).on('submit', '#cart_Data', function(event){
  event.preventDefault();

    var userid = $('#userid').val(); 
  var date = $('#date').val();
  var time = $('#time').val();
  var Person = $('#Person').val();

  if(userid != '' && date != '' && time != '' && Person != '')
  {
  
   $.ajax({
    url:"insert/reserve.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    beforeSend:function(){
$('.myloaders').show();
            },
    success:function(data)
    {
    Swal.fire('50% downpayment Required! Please Wait for the Confirmation <br>First Thankyou', '', 'info');

    
    }
   });
  }
  else
  {
   Swal.fire('Fill All Data!', '', 'info');
  }
 });


</script>
<script>
 $(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
   
    $('#date').attr('min', maxDate);
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

<script src="../myjs/sweetalert2.min.js"></script>
 <script src="../myjs/jquery.min.js"></script>
  <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
