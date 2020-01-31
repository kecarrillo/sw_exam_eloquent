<?php

use App\Database;
use App\Models\Vehicle;

require_once dirname(dirname(__DIR__)) . '../vendor/autoload.php';
(new Database())->initConnexion();

$vehicles = Vehicle::all();

echo '<form action="action_page.php"><select name="vehicle" multiple>';

foreach($vehicles as $v){
    echo '<option value='.$vehicles->id.'>'.$vehicles->name.'</option>';
};

echo '</select><input type="submit"></form>';
