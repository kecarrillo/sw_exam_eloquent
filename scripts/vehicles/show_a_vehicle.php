<?php

use App\Database;
use App\Models\Vehicle;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();

private function show_a_starship($name){
    $vehicle = Vehicle::all();

    $vehicle = Vehicle::findOrFail('name', $name);
}