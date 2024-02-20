<?php

require_once __DIR__.'/Product.php';

class Food extends Product {

    public $expiration;
    
    public function __construct(
        $name,
        $expiration,
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
    )
    {
        parent::__construct(
            $name,
            $image,
            $price,
            $quantity,
            $description,
            $category
        );
        $this->expiration = $expiration;
    }
    
}