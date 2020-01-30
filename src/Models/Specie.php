<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    protected $fillable = [
        'name',
        'classification',
    ];

    public function person()
    {
        return $this->hasMany('App\Person');
    }
}
