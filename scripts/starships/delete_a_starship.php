<?php

use App\Database;
use App\Models\Starship;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();

private function delete_a_starship($name){
    $starship = Starship::all();

    $starship = Starship::where('name', $name)->delete();
}