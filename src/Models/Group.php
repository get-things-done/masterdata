<?php
namespace GetThingsDone\Masterdata\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'masterdata';

    protected $fillable = [
        'code', 'name'
    ];

    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}
