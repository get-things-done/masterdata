<?php
namespace GetThingsDone\Masterdata\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'base_url','medium_url','thumb_url', 'entity_type','entity_id'
    ];
    public function entity()
    {
        return $this->morphTo();
    }
}
