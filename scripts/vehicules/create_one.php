<?php

use App\Models\Vehicule;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function createVehicule() {

    $name = (string) $argv[1];
    $length = (int) $argv[2];

    \App\Models\Person::create([	
	'name'		=> $name,
    'length'	=> $length
	]);
	
}
