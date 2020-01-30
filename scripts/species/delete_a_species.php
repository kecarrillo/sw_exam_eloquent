<?php

use App\Database;
use App\Models\Specie;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();


private function delete_a_species($name){
    $species = Specie::all();

    $species = Specie::where('name', $name)->delete();
}