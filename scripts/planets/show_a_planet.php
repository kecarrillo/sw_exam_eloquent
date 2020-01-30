<?php

use App\Database;
use App\Models\Planet;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();

private function show_a_planet($name){
    $planet = Planet::all();

    $planet = Planet::findOrFail('name', $name);
}