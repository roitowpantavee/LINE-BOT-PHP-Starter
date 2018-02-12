<?php
$access_token = 'jleR0MrYG+9No9m6cDLdimOpJ4gBTrMtYMp8XS9GGX14OCNUUXlQutMjGm4OBD1XwjNm2u1odSA6QSdKFvo9as8O4PUprDSwu/2ZAnD5xWbugcZCEjJTKxafl+YJ5mVKeR9Olq3NgwFvjf9J1DcgjgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;