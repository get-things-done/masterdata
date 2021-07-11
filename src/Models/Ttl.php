<?php
namespace GetThingsDone\Masterdata\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Ttl extends Model
{
    protected $fillable = [
        'expired_at',
    ];

    protected $casts = [
        'expired_at' => 'datetime',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('expired', function (Builder $builder) {
            return $builder->where('expired_at', '>', now());
        });
    }

    public function entity()
    {
        return $this->morphTo();
    }

    public function expired(): bool
    {
        return $this->expired_at < now();
    }
}
