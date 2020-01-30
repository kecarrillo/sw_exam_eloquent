<?php

use App\Models\Planet;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function createPlanet() {

    $name = (string) $argv[1];
    $diameter = (int) $argv[2];
    $climate = (string) $argv[3];
    $population = (int) $argv[4];

    \App\Models\Person::create([
    'name'          => $name,
    'diameter'      => $diameter,
    'climate'       => $climate,
    'population'    => $population
	]);
	
}
