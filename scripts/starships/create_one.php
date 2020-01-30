<?php

use App\Models\Starship;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function createStarship() {

    $name = (string) $argv[1];
    $length = (int) $argv[2];
    $hyperdrive_rating = (int) $argv[3];

    \App\Models\Person::create([	
	'name'		           => $name,
    'length'	           => $length,
    'hyperdrive_rating'	   => $hyperdrive_rating
	]);
	
}
