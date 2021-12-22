<?php

error_reporting(E_ALL);

require_once "vendor/autoload.php";

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;



echo Teste::foo();
bar();


$cliente = new Client();
$response = $cliente->request('GET', 'https://www.youtube.com/');

$html = $response->getBody();
// echo $html;


$html = '<html>
<head>
</head>
<body>
    <h1>Hello World!</h1>
</body>
</html>'; 


$crawler = new Crawler();
$crawler->addHtmlContent($html);

$itens = $crawler->filter('h1');

foreach ($itens as $item) {
    echo $item->textContent . PHP_EOL;
}





?>