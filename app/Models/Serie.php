<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ["name"];

    public function seasons()
    {
        return $this->hasMany(Season::class, "series_id");
    }
}
