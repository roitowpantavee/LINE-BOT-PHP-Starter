<?php
$access_token = 'U+aq+ZOrGoeuFsoYdDSrLnLHQSXK10jdjC7mCQiv90FyBmZSt1B/adMLmqbzXOcbwjNm2u1odSA6QSdKFvo9as8O4PUprDSwu/2ZAnD5xWZf23dYkbKUcck7obFvW9l5iJJylKJ95SuFXKYpzd/6aAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
