<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $table = 'planets';

    protected $fillable = [
        'name',
        'climate',
        'diameter',
        'population',
    ];

    public function person()
    {
        return $this->hasMany(Person::class);
    }
}
