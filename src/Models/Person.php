<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = [
        'mass',
        'name',
        'gender',
        'height',
        'planet_id',
        'specie_id',
    ];

    public function planet()
    {
        return $this->belongsTo(Planet::class);
    }

    public function specie()
    {
        return $this->belongsTo(Specie::class);
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function starships()
    {
        return $this->belongsToMany(Starship::class);
    }
}
