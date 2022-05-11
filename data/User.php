<?php 

class User{
    protected $firstname;
    protected $lastname;
    protected $username;
    protected $email;
    protected $creditCard;
    public $isRegistered;
    public $discount;

    public function __construct($firstname,$lastname,$username,$email,CreditCard $creditCard =null,$isRegistered){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->username=$username;
        $this->email=$email;
        $this->creditCard=$creditCard;
        $this->isRegistered = $isRegistered;
        $this->discount = $this->setDiscount();
    }

    //£ set

    public function setCreditCard(CreditCard $creditCard){
        $this->creditCard=$creditCard;
    }

    public function setDiscount()
    {
        return $this->isRegistered ? $this->discount = 20 : $this->discount = 0;
    }

    //!get

    public function getName(){
        return $this-> firstname . ' ' . $this-> lastname;
    }

    public function getUsername(){
        return $this-> username;
    }

    public function getEmail(){
        return $this-> email;
    }

    public function getDiscount()
    {
        return 'Hai il ' . $this->discount . '% di sconto';
    }

}

?>