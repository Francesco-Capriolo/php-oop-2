<?php 

class CreditCard{
    protected $number;
    protected $expire;
    protected $cvc;
    protected $balance;

    public function __construct($number,$expire,$cvc,$balance)
    {
        $this->number=$number;
        $this->expire=$expire;
        $this->cvc=$cvc;
        $this->balance=$balance;
    }

    //£ set

    public function setNumber($number){
        return $this->number;
    }

    public function setExpire($expire){
        return $this->expire;
    }

    public function setCvc($cvc){
        return $this->cvc;
    }

    public function setBalance($balance){
        return $this->balance;
    }
    //! get

    public function getNumber(){
        return $this->number;
    }

    public function getExpire(){
        return $this->expire;
    }

    public function getCvc(){
        return $this->cvc;
    }

    public function getBalance()
    {
        return $this->creditCard->balance . '€';
    }
}
?>