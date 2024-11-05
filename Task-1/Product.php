<?php


class Product{
    var $name;
    var $price;
    var $brand;
    var $image;
    var $discription;
    var $tax;

    public function getName(){
        return $this->name;
    }

    public function priceAfterDiscount($discount){
        return $this->price - ($this->price * $discount/100);
    } 

    public function getFinalPrice($discount = 0){
        $discountPrice = $this->priceAfterDiscount($discount);
        return $discountPrice + ($discountPrice * $this->tax / 100);
    }
}