<?php 





class Payment{

    private $paymentAccount;

    public function __construct(PaymentInterface $account)
    {
        $this->paymentAccount = $account;
    }

    public function paymentAccount(){
        return $this->paymentAccount;
    }



}