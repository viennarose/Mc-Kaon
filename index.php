<!DOCTYPE html>
<html lang="en">


 <?php 
 include'user/db/connect.php';
$mysql = "SELECT * FROM details";
$querys = $connect->query($mysql);
  $abouts = $querys->fetch_assoc();

                  ?>
  <?php include'header.php';?>



    
<!-- header section starts      -->

<?php include'index_header.php';?>

<!-- header section ends-->

<!-- search form  -->
<!-- home section starts  -->



  

      

          <div class="mycontainer">
             <video controls autoplay="true" muted="" style="background-color: #000;">
  <source src="mackaon.mp4" type="video/mp4">
  <source src="mackaon.ogg" type="video/ogg">
 
</video>

                </div>
              




<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> our dishes </h3>
    <h1 class="heading"> popular dishes </h1>



 <select class="form-control" style="width: 250px; padding:10px; font-size:16px;" id="multi_search_filter" name="multi_search_filter">
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
<br>
    <div class="box-container menuss" id="menu" style="margin-top:15px;">

     

       

    </div>

</section>



<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/<?php echo $abouts['Logo'];?>" style="border-radius: 50%;"  alt="">
        </div>

        <div class="content">
            <h3> <a href="#"><?php echo $abouts['Moto'];?></a></h3>
            <p> <a href="#"><?php echo $abouts['About'];?></a></p>
            
            <div class="icons-container">
               
                <div class="icons">
                   <h1 style="font-size: 30px; font-weight: bold;color: #269C68;">&#x20B1;</h1>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>



<section class="footer">

    <div class="box-container">

 
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><?php echo $abouts['Contact_info'];?></a>
            <a href="#"><?php echo $abouts['Tel'];?></a>
            <a href="#"><?php echo $abouts['Email'];?></a>
       
        </div>
 <div class="box">
            <h3>Opening & Closing Hours</h3>
            <a href="#" style="white-space: pre;"><?php echo $abouts['Hrs'];?></a>
            
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2022 by <span>Mater Dei College Students</span> </div>

</section>

<script src="myjs/jquery.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" language="javascript" >


$(document).ready(function(){

  load_data();
  
  function load_data(query='')
  {
    $.ajax({
      url:"menu.php",
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

<!-- Bootstrap 4 -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>