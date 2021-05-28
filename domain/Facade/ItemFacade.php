<?php

namespace domain\Facade;

use domain\Service\ItemService;
use Illuminate\Support\Facades\Facade;


class ItemFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return ItemService::class;
    }
}
