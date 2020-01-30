<?php

use App\Models\Planet;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function findByPerson($person) {

    $starships = Starship::whereHas('persons', function ($query) {
        $query->where('id', $person);
    })->get();

}
