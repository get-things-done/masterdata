<?php
namespace GetThingsDone\Masterdata\Models;

use GetThingsDone\Masterdata\Concerns\InteractsWithResponse;
use Illuminate\Database\Eloquent\Model;
use GetThingsDone\Masterdata\Concerns\InteractsWithTtl;
use GetThingsDone\Masterdata\Contracts\HasTtl;
use GetThingsDone\Masterdata\Contracts\HasResponse;

class Entity extends Model implements HasTtl, HasResponse
{
    use InteractsWithTtl;
    use InteractsWithResponse;
}
