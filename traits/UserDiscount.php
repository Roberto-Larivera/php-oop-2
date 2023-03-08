<?php

trait UserDiscount
{
    protected $discount = 0.2;

    public function getDiscount($price){
        return $price - ($price * $this->discount);
    }
}