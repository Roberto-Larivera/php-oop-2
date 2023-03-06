<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Product.php';


class Food extends Product
{

    protected $weight;
    protected $description;
    protected $lot;
    protected $analyticalComponents;


    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, float $priceKg, bool $availability, string $productCode, Array $images, float $weight, string $description, string $lot, string $analyticalComponents)
    {
        parent::__construct($nameCategory, $iconCategory, $productName, $price, $priceKg, $availability, $productCode, $images);
        $this->weight = $weight;
        $this->description = $description;
        $this->lot = $lot;
        $this->analyticalComponents = $analyticalComponents;
    }

    public function getWeight(){
        return $this->weight;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getLot(){
        return $this->lot;
    }
    public function getAnalyticalComponents(){
        return $this->analyticalComponents;
    }

}
