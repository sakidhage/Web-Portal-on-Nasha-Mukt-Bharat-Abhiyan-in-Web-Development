<?php

// Authentication key
$authKey = "YOUR_AUTH_KEY";

// Also add muliple mobile numbers, separated by comma
$phoneNumber = $_POST['phoneno'];

// route4 sender id should be 6 characters long.
$senderId = "YOUR_SENDER_ID";

// Your message to send
$message = urlencode($_POST['smstext']);

// POST parameters
$fields = array(
    "sender_id" => $senderId,
    "message" => $message,
    "language" => "english",
    "route" => "p",
    "numbers" => $phoneNumber,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "NTE1MDQ5NjkzOTQ2NDQ3MTc3MzQ0ODYxNGIzMzczNmI=",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: ".$authKey,
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>