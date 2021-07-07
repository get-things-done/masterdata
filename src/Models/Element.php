<?php
namespace GetThingsDone\Masterdata\Models;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $table = 'masterdata';

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
