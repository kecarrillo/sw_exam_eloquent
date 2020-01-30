<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Starship extends Model
{
    protected $table = 'starships';

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
