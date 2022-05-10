<?php 
include_once __DIR__ . '/CreditCard.php';

class User{
    protected $firstname;
    protected $lastname;
    protected $username;
    protected $email;
    protected $creditCard;

    public function __construct($firstname,$lastname,$username,$email,CreditCard $creditCard =null){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->username=$username;
        $this->email=$email;
        $this->creditCard=$creditCard;
    }

    //£ set

    public function setCreditCard(CreditCard $creditCard){
        $this->creditCard=$creditCard;
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

    
}

?>