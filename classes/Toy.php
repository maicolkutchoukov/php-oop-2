<?php

require_once __DIR__.'/Product.php';
require_once __DIR__.'/../traits/HasMaterial.php';

class Toy extends Product {

    use HasMaterial;

    public function __construct(
        $name,
        $material,
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
        $this->material = $material;
    }

}