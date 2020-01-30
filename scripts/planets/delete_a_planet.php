<?php

use App\Database;
use App\Models\Planet;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();


private function delete_a_planet($name){
    $planet = Planet::all();

    $planet = Planet::where('name', $name)->delete();
}
