<?php

namespace domain\Facade;

use domain\Service\CategoryService;
use Illuminate\Support\Facades\Facade;


class CategoryFacade extends Facade
{
    
    protected static function getFacadeAccessor()
    {
        return CategoryService::class;
    }
}