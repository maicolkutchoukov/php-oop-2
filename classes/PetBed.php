<?php

require_once __DIR__.'/Product.php';
require_once __DIR__.'/../traits/HasMaterial.php';

class PetBed extends Product {

    use HasMaterial;

    public $width;
    public $height;
    
    public function __construct(
        $name,
        $width,
        $height,
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
        $material = null
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
        $this->width = $width;
        $this->height = $height;
        $this->material = $material;
    }
    
}