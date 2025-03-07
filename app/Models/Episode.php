<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
