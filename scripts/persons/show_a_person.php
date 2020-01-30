<?php

use App\Database;
use App\Models\Person;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();

private function show_a_person($name){
    $person = Person::all();

    $person = Person::findOrFail('name', $name);
}