<?php

namespace GetThingsDone\Masterdata;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Masterdata\Masterdata
 */
class MasterdataFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'masterdata';
    }
}
