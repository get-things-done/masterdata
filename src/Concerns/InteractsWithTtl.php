<?php
namespace GetThingsDone\Masterdata\Concerns;

use GetThingsDone\Masterdata\Models\Ttl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait InteractsWithTtl
{
    public function ttl(): MorphOne
    {
        return $this->morphOne(Ttl::class, 'entity');
    }

    public function scopeExpired(Builder $query): Builder
    {
        return $query->whereHas('ttl', fn (Builder $query) => $query->where('expired_at', '<', now()));
    }

    public function scopeAlive(Builder $query): Builder
    {
        return $query->whereHas('ttl', fn (Builder $query) => $query->where('expired_at', '>', now()));
    }
}
