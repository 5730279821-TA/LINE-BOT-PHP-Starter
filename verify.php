<?php
$access_token = '053DFOTbopNdGg4zMG0Ra3SD7mlTxRaYaQrQpbwAVgrzcbFDDB+nVSuf7eh4wJHoyUgKmUnBBoiRhEIWP7ThiBjld6tgJUuvv9ZFLLIBmLur9w4o3qP+TlTzYZHRSpVhnLc/CFUkqZa5DEM97WuRkgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
