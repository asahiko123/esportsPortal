<?php

require_once './vendor/autoload.php';


use Goutte\Client;

$client = new Client();

$url = 'https://www.yahoo.co.jp/';
$crawler = $client->request('GET',$url);

$title = $crawler->filter('head > title')->text();

echo $title;