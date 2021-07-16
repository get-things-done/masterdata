<?php
namespace GetThingsDone\Masterdata\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphOne;

interface HasResponse
{
    public function response(): MorphOne;
}
