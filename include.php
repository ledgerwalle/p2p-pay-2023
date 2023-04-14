<?php
include_once 'config.php';
$n = $card;
$n = substr(str_replace(' ', '', $n), 0, 6);
$api = file_get_contents('https://api.tinkoff.ru/v1/brand_by_bin?bin=' . $n);
$content = json_decode($api, true)['payload'];
$pays = $content['paymentSystem'];
$bank = $content['name'];
$amount = $_GET['amount'];
$desc = $_GET['desc'];
$btc = file_get_contents('https://blockchain.info/tobtc?currency='.$cur.'&value='.$amount);

