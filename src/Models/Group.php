<?php
namespace GetThingsDone\Masterdata\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'masterdata';

    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}
