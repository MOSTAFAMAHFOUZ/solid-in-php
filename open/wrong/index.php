<?php 


require_once 'Alahly.php';
require_once 'Paypal.php';
require_once 'Qnb.php';
require_once 'Cib.php';
require_once 'Payment.php';




$payment = new Payment();

// $payment->getPaymentAcount('cib')->withdraw();
$payment->getPaymentAcount('cib')->depositCib();