<?php

use App\Models\Person;
use App\Models\Vehicle;
use App\Models\Starship;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function associateWithVehiclesAndStarships($person) {

    $vehicles = \App\Models\Vehicle::all();
    $starships = \App\Models\Starship::all();

    foreach ($vehicles as $v) {
        
        $v = \App\Models\Vehicle::users($person)
    }

    foreach () {
        \App\Models\Starship::users($person)
    }

    
	
}