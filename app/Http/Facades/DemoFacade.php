<?php

namespace App\Http\Facades;


use Illuminate\Support\Facades\Facade;

class DemoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'demo';
    }
}