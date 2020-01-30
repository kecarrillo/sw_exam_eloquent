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
        return $this->belongsToMany('App\Vehicule');
    }

    public function starship()
    {
        return $this->belongsToMany('App\Starship');
    }

    public function specie()
    {
        return $this->belongsTo('App\Specie');
    }

    public function planet()
    {
        return $this->belongsTo('App\Planet');
    }

}
