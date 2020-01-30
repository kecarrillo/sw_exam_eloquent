<?php

use App\Models\Person;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

(new Database())->initConnexion();

public function createPerson() {

    $name = (string) $argv[1];
    $height = (int) $argv[2];
    $weight = (int) $argv[3];
    $gender = (string) $argv[4];

    \App\Models\Person::create([	
	'name'		=> $name,
    'height'	=> $height,
    'weight'	=> $height,
    'gender'	=> $gender
	]);
	
}
