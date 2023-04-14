<?php
include_once __DIR__.'/config.php';
if(isset($_SERVER['HTTP_REFERER'])) {
    $referrer = $_SERVER['HTTP_REFERER'];
   
} else {
    $referrer =  "Прямой переход без реферера";
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>Visa</title>
	<meta name="description" content="Description site">
	<link rel="shortcut icon" href="../assets/img/favicon.svg">
	<link rel="stylesheet" href="../assets/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<div class="page">
		<div class="sidebar sidebar_qiwi">
			<img src="<?php echo $logo ?>" srcset="<?php echo $logo ?> 2x" alt="">
		</div>
		<div class="content">
			<div class="payment">
				<div class="payment__head">
					<div class="payment__logos">
						<div class="payment__logo"><img src="../assets/img/visa.png" srcset="../assets/img/visa_2x.png 2x" alt=""></div>
						<div class="payment__logo"><img src="../assets/img/mastercard.png" srcset="../assets/img/mastercard_2x.png 2x" alt=""></div>
						<div class="payment__logo"><img src="../assets/img/mir.png" srcset="../assets/img/mir_2x.png 2x" alt=""></div>
						<div class="payment__logo"><img src="../assets/img/btcs.png" srcset="../assets/img/btcs.png 2x" alt=""></div>
					</div>
				</div>
					<div class="payment__head">
					<div class="payment__logos">
						<div class="payment__logo"><img src="../assets/img/qiwi.png" srcset="../assets/img/qiwi_2x.png 2x" alt=""></div>
						<div class="payment__logo"><img src="../assets/img/sbp.png" srcset="../assets/img/sbp_2x.png 2x" alt=""></div>
						<div class="payment__logo"><img src="../assets/img/yoomoney.png" srcset="../assets/img/yoomoney_2x.png 2x" alt=""></div>
					</div>
				</div>
				<!--div class="payment__desc">
					<b>Выполнить перевод необходимо в течении
						<span class="payment__countdown" id="countdown">
							<span class="days"></span><span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
						</span>
					</b>
					Зайдите в ваше банковское приложение и переведите точную сумму по реквизитам указанным ниже
				</div-->
<div class="payment__form form">
    <div class="payment__title">Заполните данные</div>
    <div class="payment__form form-container">
      <form action="process-payment.php" method="post">
        <br>
        <div class="form__field">
          <label class="form__label" for="desc">Назначение:</label>
          <input class="form__input" type="text" id="desc" name="desc" placeholder="Введите назначение платежа" required >
        </div>
        <div class="form__field">
          <label class="form__label" for="amount">Сумма:</label>
          <input class="form__input" type="text" id="amount" name="amount" placeholder="Введите сумму" required >
        </div>
      <label class="form__label">Выберите способ оплаты:</label>
    <div class="form__field form__field_payment">
        <select class="form__input" id="payment_method" name="payment_method">
            <option value="card">Выбрать...</option>
            <option value="card">Карта</option>
            <option value="qiwi">Qiwi</option>
            <option value="sbp">СБП</option>
            <option value="yoomoney">ЮMoney</option>
            <option value="btc">Bitcoin</option>
        </select>
    </div>
        <div class="form__field">
          <div class="form__payment-options">
            <button type="submit" class="button">Оплатить</button>
          </div>
        </div>
      </form>
    </div>
</div>
			</div>
		</div>
	</div>

</body>

</html>