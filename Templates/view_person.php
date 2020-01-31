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

$person = Person::where('id', $_GET['id'])->first();

echo '<h1>'.$person->name.'</h1>';

echo '<br><h2>Caractéristiques:</h2><br>';

echo '<p>Taille: '. $person->height .'</p><br>';
echo '<p>Poids: '. $person->mass .'</p><br>';
echo '<p>Genre: '. $person->gender .'</p><br>';
echo '<p>Espèce: '. Specie::findOrFail($person->specie_id)->name .'</p><br>';
echo '<p>Planète: '. Planet::findOrFail($person->planet_id)->name .'</p><br>';
echo '<p>Véhicules conduits:<br>';
foreach(PersonVehicle::where('person_id', $person->id)->get() as $v){
    echo '- ' . Vehicle::findOrFail($v->vehicle_id)->name . '<br>';
}
    echo '</p><br>';
echo '<p>Vaisseaux pilotés:<br>';
foreach(PersonStarship::where('person_id', $person->id)->get() as $p){
    echo '- ' . Starship::findOrFail($p->starship_id)->name . '<br>';
}
echo '</p><br>';
