<?php

require_once __DIR__.'/../traits/HasName.php';

class Product {

    use HasName;

    public $image;
    public $price;
    public $quantity;
    public $description;
    public $category; // è un'associazione con la classe Category

    public function __construct(
        $name,
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
    )
    {
        $this->name = $name;
        $this->image = $image;
        if (is_numeric($price)) {
            $this->price = $price;
        }
        else {
            // Dì al programmatore che sta sbagliando (e cosa)
            throw new Exception('Valore prezzo frisbee non valido, is not a number');
        }
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        }
        else {
            // Dì al programmatore che sta sbagliando (e cosa)
            throw new Exception('Valore quantità frisbee non valido, is not a number');
        }
        $this->description = $description;
        $this->category = $category;
    }

}