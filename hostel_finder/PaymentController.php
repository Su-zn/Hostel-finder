<?php
class paymentcontroller extends PaymentController{
    public function verifypayment(Request $request){
        $token = $request->token;
        <?php
$args = http_build_query(array(
  'token' => '$token',
  'amount'  => 1000
));

$url = "https://khalti.com/api/v2/payment/verify/";

# Make the call using API.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$secret_key = "test_secret_key_db7150ca4e9843c8a5a824cf14d47a2e"

$headers = ['Authorization: Key $secret_key'];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Response
$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
return $response;
  if($status_code==200){
    return response() -> json(['success' => 1, 'redirecto' => header('Location:http://localhost/hostel_finder/mycart.php');
    exit();])
  }else{
    return response() -> json(['error' => 1, 'message' => 'Payment Failed'])
  }
    }
}

?>