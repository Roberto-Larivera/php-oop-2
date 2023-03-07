<?php
require_once __DIR__.'/Category.php';

class Product extends Category {
    protected $productName;
    protected $price;
    protected bool $availability;
    protected  $images;
    protected  $productCode;




    function __construct(string $nameCategory, string $iconCategory, string $productName, float $price, bool $availability, string $productCode, Array $images = []){
        parent::__construct($nameCategory, $iconCategory);
        $this -> productName = $productName;
        $this -> price = $price;
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
    public function getAvailability(){
        return $this->availability;
    }
    public function getImages(){
        return $this->images;
    }
    public function getProductCode(){
        return $this->productCode;
    }
    public function printSwiper($Slides){
        echo '<div class="swiper mySwiper">';
        echo'<div class="swiper-wrapper">';
        foreach($Slides->getImages() as $Slide){
            echo'<div class="swiper-slide"><img class="w-100" src="' . $Slide . '"></div>';
        }
        echo'</div>';
        echo'<div class="swiper-button-next"></div>';
        echo'<div class="swiper-button-prev"></div>';
        echo '<div class="swiper-pagination"></div>';   

        echo'</div>';
    }
}