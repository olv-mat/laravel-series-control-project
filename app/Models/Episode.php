<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Episode extends Model
{
    public $timestamps = false;
    protected $fillable = ["number"];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    protected function watched(): Attribute
    {
        return new Attribute(
            get: fn ($watched) => (bool) $watched
        );
    }
}
