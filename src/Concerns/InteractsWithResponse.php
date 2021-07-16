<?php
namespace GetThingsDone\Masterdata\Concerns;

use GetThingsDone\Masterdata\Models\Response;
use Illuminate\Database\Eloquent\Relations\MorphOne;

;

trait InteractsWithResponse
{
    public function response(): MorphOne
    {
        return $this->morphOne(Response::class, 'entity');
    }
}
