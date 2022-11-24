<?php
include'db/session.php';
$usersid = $users['id'];
$names = $fullname;
  $emails = $users['Email'];
  $contact_Number = $users['Contact'];
$cash_amount = $_GET['id'];
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
  'description' => 'Payment for services rendered',

'customername' => $names,
      'customeremail' => $emails,
      'customermobile' => $contact_Number,
      'merchantname' => 'Mac Ka On',
      'checkouturl' => 'https://getpaid.gcash.com/checkout/247d025e78852022936d0b59e6d96d7f',

       
  ),

));

$response = curl_exec($curl);
$payment_ur = json_decode($response,true);
$link = $payment_ur['data']['checkouturl'];
echo $link;
curl_close($curl);
 header("Location: ".$link);
?>


   