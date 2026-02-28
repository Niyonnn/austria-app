<?php

namespace App\Services;

class ProductService
{
    protected $products;

    /**
     * Ensure the constructor is properly named so dependency
     * injection works as expected.
     */
    public function __construct($products)
    {
        $this->products = $products;
    }

    public function listProducts() {
        return $this->products;
    }

    public function insert($products) {
        return $this->products[] = $products;
    }
}