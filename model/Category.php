<?php
class Category {
    public $nameCategory;

    function __construct($nameCategory){
        if(!is_numeric($nameCategory) || !is_null($nameCategory)){
            $this -> $nameCategory = $nameCategory;
        }      
    }
}
