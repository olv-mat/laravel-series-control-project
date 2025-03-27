<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Model,
    Builder
};


class Series extends Model
{
    protected $fillable = ["name", "cover"];

    public function seasons()
    {
        return $this->hasMany(Season::class, "series_id");
    }

    protected static function booted()
    {
        self::addGlobalScope("ordered", function(Builder $queryBuilder) {
            $queryBuilder->orderBy("name");
        });
    }
}
