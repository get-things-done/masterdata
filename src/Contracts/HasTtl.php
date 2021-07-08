<?php
namespace GetThingsDone\Masterdata\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphOne;

interface HasTtl
{
    public function ttl(): MorphOne;

    public function scopeExpired(Builder $query): Builder;
    public function scopeAlive(Builder $query): Builder;
}
