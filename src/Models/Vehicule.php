<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'length',
    ];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
