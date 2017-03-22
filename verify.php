<?php
$access_token = 'RFT+TtKxSTjK2GQZaYmZmNIPlCYy1OsDmcVEG/6DCB6eFbXgHiPS7pJDHGdRqRsnfDVAmqcL64et9Vnlq/7YIxRe8YfBxnW54iICkEu597aGOKOPlsgabGEJoUYK0fztePcX/luM6SSREhNWIj5A+gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;