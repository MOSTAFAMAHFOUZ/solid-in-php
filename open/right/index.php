<?php 


require_once 'PaymentInterface.php';
require_once 'Alahly.php';
require_once 'Paypal.php';
require_once 'Qnb.php';
require_once 'Cib.php';
require_once 'Stripe.php';
require_once 'Payment.php';




$payment = new Payment(new Strip());
$payment->paymentAccount()->deposit();