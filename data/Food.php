<?php 
class Food extends Product{
    protected $ingredients;
    protected $expire;
    protected $weight;

    public function __construct($name,$price,$description,$ingredients,$expire,$weight){
        parent::__construct($name,$price,$description);
        $this->ingredients=$ingredients;
        $this->expire=$expire;
        $this->weight=$weight;
    }

    public function getingredients(){
        return $this->ingredients;
    }

    public function getexpire(){
        return $this->expire;
    }

    public function getweight(){
        return $this->weight;
    }

}
?>