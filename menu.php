<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=mackaon", "root", "");

if($_POST["query"] != '')
{
	$search_array = explode(",", $_POST["query"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query = "
	SELECT menu.*,category.Category FROM `menu` Inner Join category on menu.category = category.id WHERE menu.category IN (".$search_text.") ";
}
else
{
	$query = "SELECT menu.*,category.Category FROM `menu` Inner Join category on menu.category = category.id ORDER BY category.Category ASC";
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
                
              


		$output .= '
		
		  <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/'.$picture.'" alt="">
            <h3>'.$names.'</h3>
            <h5>'.$Description.'</h5>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span><b>Price: &#8369; '.$price.'</b></span>
            <a href="login" class="btn">add to cart</a>
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
