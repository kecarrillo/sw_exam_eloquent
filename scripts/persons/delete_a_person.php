<?php

use App\Database;
use App\Models\Person;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

(new Database())->initConnexion();


public function 
$person = Person::all();

$person = Person::where('name',
        'like',
        '%'+ $name + '%')
        ->delete();
