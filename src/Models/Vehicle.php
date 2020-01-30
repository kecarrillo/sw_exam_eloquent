<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'name',
        'length',
        'hyperdrive_rating',
    ];

    public function users()
    {
        return $this->belongsToMany(Person::class);
    }
}
