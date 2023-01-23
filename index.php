<?php

$apiaccount = "01XXXXXXX"; // Api Account Number
$apikey = "XXXXXXX"; // Api Key
$number = "XXXXXXX"; // TopUp Number
$amount = "XX"; // TopUp Amount
$type = "Prepaid"; // Type [Prepaid/Postpaid/Skitto]

$url = "https://auto.superstarfamily.press/app/api/topup.php?access_id=$apiaccount&access_key=$apikey&number=$number&amount=$amount&type=$type";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>
