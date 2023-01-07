<?php 





class Payment{


    public function getPaymentAcount($type){
        if($type == "cib"){
            return new Cib();
        }elseif($type == "alhly"){
            return new Alhly();
        }elseif($type == "paypal"){
            return new Paypal();
        }elseif($type == "qnb"){
            return new Qnb();
        }
    }   

}