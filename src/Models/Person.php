<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'height',
        'mass',
        'gender'
    ];

    public function vehicle()
    {
        return $this->hasMany('App\Vehicules');
    }

    public function starship()
    {
        return $this->hasMany('App\Starships');
    }

    public function specie()
    {
        return $this->belongsTo('App\Species');
    }

    public function planet()
    {
        return $this->belongsTo('App\Planets');
    }

}
