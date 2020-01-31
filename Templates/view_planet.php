<?php

use App\Database;
use App\Models\Person;
use App\Models\Vehicle;
use App\Models\Starship;
use App\Models\Specie;
use App\Models\Planet;
use App\Models\PersonVehicle;
use App\Models\PersonStarship;

require_once '../vendor/autoload.php';
(new Database())->initConnexion();

$planet = Planet::where('id', $_GET['id'])->first();

echo '<h1>'.$planet->name.'</h1>';

echo '<br><h2>Caractéristiques:</h2><br>';

echo '<p>Diamètre: '. $planet->diameter .'</p><br>';
echo '<p>Population: '. $planet->population .'</p><br>';
echo '<p>Climat: '. $planet->climate .'</p><br>';
echo '<p>Personnages: ';
foreach(Person::where('planet_id', $planet->id)->get() as $p){
    echo '- ' . $p->name . '<br>';
}
echo '</p><br>';