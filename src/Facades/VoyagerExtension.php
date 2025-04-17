<?php

namespace SoinalaStudio\VoyagerExtension\Facades;

use Illuminate\Support\Facades\Facade;

class VoyagerExtension extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 've';
    }
}
