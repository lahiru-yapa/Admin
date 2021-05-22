<?php

namespace domain\Service;
use App\Models\Category;

class CategoryService
{

    public function __construct()
    {
        $this->Category = new Category();
    }
    public function all(){ 
       return $this->Category::get();
    }
    
    public function create(){ 
        return $this->Category::get();
     }
}