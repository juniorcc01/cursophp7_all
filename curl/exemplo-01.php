<?php

$cep = "06626460";
$link = "https://viacep.com.br/ws/01310100/json/";

$ch = curl_init($link);


curl_setopt($ch, CURLOPT_PROXY, "192.168.0.1:3128");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


$response = curl_exec($ch);

if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

?>