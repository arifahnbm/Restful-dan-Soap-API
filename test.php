<?php

$url = 'https://api.coindesk.com/v1/bpi/currentprice.json';
$response = file_get_contents($url);
    //curl untuk data komples
    //file_get_contents untuk data sederhana
if($response === false) {
    die('Datanya eobseo !!!');
}
$data = json_decode($response, true);
print_r($data);