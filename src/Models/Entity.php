<?php
namespace GetThingsDone\Masterdata\Models;

use GetThingsDone\Masterdata\Concerns\InteractsWithResponse;
use GetThingsDone\Masterdata\Concerns\InteractsWithTtl;
use GetThingsDone\Masterdata\Contracts\HasResponse;
use GetThingsDone\Masterdata\Contracts\HasTtl;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model implements HasTtl, HasResponse
{
    use InteractsWithTtl;
    use InteractsWithResponse;
}
