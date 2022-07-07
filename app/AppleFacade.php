<?php

namespace App;

use Illuminate\Support\Facades\Facade;

class AppleFacade extends Facade {
    

    protected static function getFacadeAccessor()
    {
        return "apple";
    }

}