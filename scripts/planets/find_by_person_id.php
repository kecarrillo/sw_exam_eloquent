<?php

use App\Models\Planet;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function findByPerson($person) {

    $planets = Planet::whereHas('persons', function ($query) {
        $query->where('id', $person);
    })->get();

}
