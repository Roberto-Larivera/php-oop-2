<?php
require_once __DIR__.'/Category.php';

class Product extends Category {
    public $productName;
    public $price;
    public $priceKg;
    public bool $availability;
    public  $images;
    public  $productCode;




    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, float $priceKg, bool $availability, string $productCode, Array $images = []){
        parent::__construct($nameCategory, $iconCategory);
        $this -> productName = $productName;
        $this -> price = $price;
        $this -> priceKg = $priceKg;
        $this -> availability = $availability;
        $this -> productCode = $productCode;

        $this -> images = $images;
    }
}