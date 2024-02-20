<?php

require_once __DIR__.'/../traits/HasName.php';

class Category {

    use HasName;

    public function __construct(
        $name
    )
    {
        $this->name = $name; 
    }
    
}