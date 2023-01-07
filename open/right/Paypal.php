<?php 


class Paypal implements PaymentInterface{

    public function deposit()
    {
        echo __CLASS__ . " deposit : ";
    }


    public function withdraw()
    {
        echo __CLASS__ . " withdraw : ";
    }

}