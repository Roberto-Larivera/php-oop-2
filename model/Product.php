<?php
require_once __DIR__.'/Category.php';

class Product extends Category {
    protected $productName;
    protected $price;
    protected $priceKg;
    protected bool $availability;
    protected  $images;
    protected  $productCode;




    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, float $priceKg, bool $availability, string $productCode, Array $images = []){
        parent::__construct($nameCategory, $iconCategory);
        $this -> productName = $productName;
        $this -> price = $price;
        $this -> priceKg = $priceKg;
        $this -> availability = $availability;
        $this -> productCode = $productCode;

        $this -> images = $images;
    }


    public function getProductName(){
        return $this->productName;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getPriceKg(){
        return $this->priceKg;
    }
    public function getAvailability(){
        return $this->availability;
    }
    public function getImages(){
        return $this->images;
    }
    public function getProductCode(){
        return $this->productCode;
    }
}