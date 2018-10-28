<?php


require_once __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://localhost:8080');
$promise = $client->sendAsync($request)->then(function($response) {
    $produtos = json_decode($response->getBody());
    foreach($produtos as $produto)
        echo "{$produto->id} - {$produto->nome}\n";
});
$promise->wait();
