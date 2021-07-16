<?php
namespace GetThingsDone\Masterdata\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = [
        'value'
    ];
    protected $casts = [
        'value' => 'object'
    ];

    public function entity()
    {
        return $this->morphTo();
    }
}
