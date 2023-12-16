<?php

interface IItem
{
    public function setCondition($condition);
    public function setPrice($price);
}

interface IClothes
{
    public function setColor($color);
    public function setSize($size);
    public function setMaterial($material);
}

interface IDiscountable
{
    public function applyDiscount($discount);
    public function applyPromocode($promocode);
}

class Book implements  IItem, IDiscountable{
    public function applyDiscount($discount)
    {
        // TODO: Implement applyDiscount() method.
    }

    public function applyPromocode($promocode)
    {
        // TODO: Implement applyPromocode() method.
    }

    public function setColor($color)
    {
        // TODO: Implement setColor() method.
    }

    public function setSize($size)
    {
        // TODO: Implement setSize() method.
    }

    public function setCondition($condition)
    {
        // TODO: Implement setCondition() method.
    }

    public function setPrice($price)
    {
        // TODO: Implement setPrice() method.
    }

}

class KidsClothes implements IItem, IClothes{
    public function applyDiscount($discount)
    {
        // TODO: Implement applyDiscount() method.
    }

    public function applyPromocode($promocode)
    {
        // TODO: Implement applyPromocode() method.
    }

    public function setColor($color)
    {
        // TODO: Implement setColor() method.
    }

    public function setSize($size)
    {
        // TODO: Implement setSize() method.
    }

    public function setCondition($condition)
    {
        // TODO: Implement setCondition() method.
    }

    public function setPrice($price)
    {
        // TODO: Implement setPrice() method.
    }

    public function setMaterial($material)
    {
        // TODO: Implement setMaterial() method.
    }

}
