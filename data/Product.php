<?php 

class Product{
    protected $name;
    protected $price;
    protected $description;

    public function __construct(string $name, float $price, string $description){
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
    }

    //£ set

    public function setName(string $name){
        $this->name=$name;
    }

    public function setPrice(float $price){
        $this->price=$price;
    }

    public function setDescription(string $description){
        $this->description=$description;
    }

    //! get

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->getPrice;
    }

    public function getDescription(){
        return $this->description;
    }

}


?>