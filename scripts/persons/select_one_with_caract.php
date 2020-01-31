<?php

use App\Database;
use App\Models\Person;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();

function select_one_with_caract(){
    $persons = Person::all();

    foreach ($persons as $person) {
    	echo $person->name;
    }
    

    //$name = Person::findOrFail('name', $name);
    //$person = Person::findOrFail('gender', $gender);
    //$person = Person::findOrFail('mass', $mass);
    //$person = Person::findOrFail('height', $height);
//
    //$specie = Specie::whereHas('persons', function ($query) {
    //    $query->where('id', $person);
    //})->get();
//
    //$planet = Planet::whereHas('persons', function ($query) {
    //    $query->where('id', $person);
    //})->get();

}