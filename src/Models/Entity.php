<?php
namespace GetThingsDone\Masterdata\Models;

use GetThingsDone\Masterdata\Concerns\InteractsWithTtl;
use GetThingsDone\Masterdata\Contracts\HasTtl;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model implements HasTtl
{
    use InteractsWithTtl;
}
