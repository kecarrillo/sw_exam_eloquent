<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonVehicle extends Model
{
    protected $table = 'person_vehicle';

    protected $fillable = [
        'vehicle_id',
        'person_id',
    ];

    public function person()
    {
        return $this->belongsToMany(Person::class);
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }
}
