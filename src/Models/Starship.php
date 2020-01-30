<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Starship extends Model
{
    protected $fillable = [
        'name',
        'length',
        'hyperdrive_rating',
    ];

    public function person()
    {
        return $this->belongsToMany('App\Person');
    }
}
