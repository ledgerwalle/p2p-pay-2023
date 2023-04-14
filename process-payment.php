<?php
if (isset($_POST['payment_method'])) {
    $selected_button = $_POST['payment_method'];
    $desc = isset($_POST['desc']) ? urlencode($_POST['desc']) : '';
    $amount = isset($_POST['amount']) ? urlencode($_POST['amount']) : '';
    switch ($selected_button) {
        case 'card':
            header("Location: card/?desc={$desc}&amount={$amount}");
            break;
        case 'sbp':
            header("Location: sbp/?desc={$desc}&amount={$amount}");
            break;
        case 'qiwi':
            header("Location: qiwi/?desc={$desc}&amount={$amount}");
            break;
        case 'yoomoney':
            header("Location: yoomoney/?desc={$desc}&amount={$amount}");
            break;
        case 'btc':
            header("Location: btc/?desc={$desc}&amount={$amount}");
            break;
        default:
            header("Location: unknown/");
    }

    exit;
}

?>