<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonStarship extends Model
{
    protected $table = 'person_starship';

    protected $fillable = [
        'starship_id',
        'person_id',
    ];

    public function person()
    {
        return $this->belongsToMany(Person::class);
    }

    public function starships()
    {
        return $this->belongsToMany(Starship::class);
    }
}
