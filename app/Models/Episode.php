<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $timestamps = false;

    public function series()
    {
        return $this->belongsTo(Serie::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
