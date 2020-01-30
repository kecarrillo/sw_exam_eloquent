<?php

use App\Models\Specie;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function createSpecie() {

    $name = (string) $argv[1];
    $classification = (string) $argv[2];

    \App\Models\Person::create([	
	'name'		       => $name,
    'classification'   => $classification
	]);
	
}
