<?php

use App\Database;
use App\Models\Vehicle;
use App\Models\Starship;
use App\Models\Specie;
use App\Models\Planet;

require_once '../vendor/autoload.php';

(new Database())->initConnexion();

$vehicles = Vehicle::all();
$starships = Starship::all();
$species = Specie::all();
$planets = Planet::all();

echo '<form method="POST" action="test.php">';
echo '<h2>Nouveau personnage</h2>';
echo '<input name="name" placeholder="Nom"></input><br>';
echo '<select name="gender" placeholder="Sexe">
        <option select="selected" value="n/a">n/a</option>
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="hermaphrodite">hermaphrodite</option>
      </select><br>';
echo '<input name="mass" placeholder="Poids en kg"></input><br><input name="height" placeholder="Taille en cm"></input>';

// Vehicles
echo '<br><select multiple size=20 name="vehicles[]" id="vehicle-select">' . '<option value="">--Choisir un ou plusieurs vehicules--</option>';
foreach ($vehicles as $vehicle) {
	echo '<option value="' . $vehicle->id . '">' . $vehicle->name . '</option>';
}
echo '</select>';

// Starships
echo '<select multiple size=20 name="starships[]" id="starship-select">' . '<option value="">--Choisir un ou plusieurs starships--</option>';
foreach ($starships as $starship) {
	echo '<option value="' . $starship->id . '">' . $starship->name . '</option>';
}
echo '</select><br>';

// Species
echo '<br><select size=20 name="specie" id="specie-select">' . '<option value="">--Choisir une espèce--</option>';
foreach ($species as $specie) {
	echo '<option value="' . $specie->id . '">' . $specie->name . '</option>';
}
echo '</select>';

// Planets
echo '<select size=20 name="planet" id="planet-select">' . '<option value="">--Choisir une planète--</option>';
foreach ($planets as $planet) {
	echo '<option value="' . $planet->id . '">' . $planet->name . '</option>';
}
echo '</select>';

echo '<br><button type="submit">Valider</button>';
echo '</form>';

