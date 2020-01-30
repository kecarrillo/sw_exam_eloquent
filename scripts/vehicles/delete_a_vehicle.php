<?php

use App\Database;
use App\Models\Vehicule;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();

private function delete_a_vehicule($name){
    $vehicule = Vehicule::all();

    $vehicule = Vehicule::where('name', $name)->delete();
}