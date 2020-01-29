<?php

use App\Models\Person;

public function deletePerson() {
    $name = (string) $argv[1];
    Person::where('name',$name)->delete();
}