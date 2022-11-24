<?php

//fetch.php

include'../db/pdo.php';

if($_POST["query"] != '')
{
	$search_array = explode(",", $_POST["query"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query = "
	SELECT menu.*,category.Category FROM `menu` Inner Join category on menu.category = category.id WHERE menu.status ='0' and menu.category IN (".$search_text.") Group By menu.name ";
}
else
{
	$query = "SELECT menu.*,category.Category FROM `menu` Inner Join category on menu.category = category.id where menu.status ='0' Group By menu.name ORDER BY category.Category ASC ";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';
  
  
if($total_row > 0)
{
	foreach($result as $row)
	{

	         $Category = $row['Category'];
                   $Description = $row['description'];
               $names = $row['name'];
              $price = $row['price'];
              $picture = $row['photo'];
                $id = $row['id'];
                
                if ($row['qty'] == '0') {
                  $cashout = 'text-decoration: line-through;';
                  $stock = 'Out of Stock';
                }else{
                  $cashout = '';
                    $stock = '';
                }


		$output .= '
		  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch box" >
              <div class="card bg-light" style="max-width:350px; min-width:350px; width: 350px;">
                <div class="card-header text-muted border-bottom-0">
                
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead" ><b style="'.$cashout.'">'.$names.' </b> </h2>
                      <p class="text-muted text-sm">'.$stock.'</p>
                      <p class="text-muted text-sm"><b>About: </b>'.$Description.' </p>
                      
                        <p class="small text-muted" style="'.$cashout.'"><b>Price: &#8369; '.$price.'</b></p>
                    
                 
                    </div>
                    <div class="col-5 text-center">
                      <img src="../images/'.$picture.'" alt="" class="img-circle img-fluid" style="width: 250px; height: 130px;">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary mycarts" data-id="'.$row['id'].'">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Add To Cart
                    </a>
                  </div>
                </div>
              </div>
            </div>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="6" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;


?>
<script type="text/javascript">
	 $("div.card .mycarts").click(function(e){
    e.preventDefault()
  
   $('#Move').modal('show');
   var move_id = $(this).attr('data-id');
   $("#move_id").val( move_id );
  })
</script>