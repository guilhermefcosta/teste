<?php

require 'vendor/autoload.php';


$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://cursos.alura.com.br/formacao-desenvolvedor-php');

echo $response->getStatusCode() . PHP_EOL; // 200
// echo $response->getHeaderLine('content-type'); 
// echo $response->getBody(); 

$type = $response->getHeaderLine('content-type');
$type = explode(';', $type);

if ($type[0] === "text/html") {
    echo "ok" . PHP_EOL;
}

echo $response->getBody();






?>