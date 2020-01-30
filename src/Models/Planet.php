<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable = [
        'name',
        'diameter',
        'climate',
        'population'
    ];
    public function person()
    {
        return $this->hasMany('App\Persons');
    }


}
