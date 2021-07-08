<?php
namespace GetThingsDone\Masterdata\Models;

use Illuminate\Database\Eloquent\Model;
use GetThingsDone\Masterdata\Concerns\InteractsWithTtl;
use GetThingsDone\Masterdata\Contracts\HasTtl;

class Entity extends Model implements HasTtl
{
    use InteractsWithTtl;
}
