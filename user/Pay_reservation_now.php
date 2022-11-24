<?php
include'db/session.php';
$usersid = $users['id'];
$ids = $_GET['id'];


$get_sched = mysqli_query($connect, "SELECT * FROM `reservation` WHERE id ='$ids'");


 while($row = $get_sched->fetch_assoc())          {
	$price = $row['Price'];
		$reservation_id = $row['id'];
	$date = $row['date'];
		$time = $row['time'];
			$cash_amount =  $price *0.50;

}
	
$names = $fullname;
  $emails = $users['Email'];
  $contact_Number = $users['Contact'];


$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://g.payx.ph/payment_request',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
  'x-public-key' => 'pk_f8441e69b4d5a4b3e7b0bc564087659b',
  'amount' => $cash_amount,
  'description' => 'Payment for Room Reservation',

'customername' => $names,
      'customeremail' => $emails,
      'customermobile' => $contact_Number,
      'merchantname' => 'El RAZA Restaurant and Bar',
      'checkouturl' => 'https://getpaid.gcash.com/checkout/247d025e78852022936d0b59e6d96d7f',
    'redirectsuccessurl' => 'https://el-raza.com/user/Pay_Gcash_reserve.php?id='.$reservation_id.'&amount='.$cash_amount,
    'webhooksuccessurl' => 'https://el-raza.com/user/Pay_Gcash_reserve.php?id='.$reservation_id.'&amount='.$cash_amount,
       
  ),

));

$response = curl_exec($curl);
$payment_ur = json_decode($response,true);
$link = $payment_ur['data']['checkouturl'];
echo $link;
curl_close($curl);
 header("Location: ".$link);

?>


   