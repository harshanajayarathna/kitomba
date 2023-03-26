<?php

namespace tax\models;

class Product {
    
    public $name;    
    public $category;
    public $origin;
    public $quantity;
    public $price;

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory():string
    {
        return $this->category;
    }    
    
    public function getOrigin(): string
    {
        return $this->origin;
    }
        
    public function getQuantity():int
    {
        return $this->quantity;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    
}

