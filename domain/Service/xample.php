<?php

namespace domain\Service;
use App\Models\Product;
use App\Models\category;

class ProductServices
{

    public function __construct()
    {
        $this->Product = new Product();
    }
    public function productArray(){ 
        return $this->Product::get();
    }
   
   
    
}