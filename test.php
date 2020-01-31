<?php

$name = $_POST['name'];
$gender = $_POST['gender'];
$mass = $_POST['mass'];
$height = $_POST['height'];

if(isset($_POST['vehicles'])) {
$vehicles = $_POST['vehicles'];
}

if(isset($_POST['starships'])) {
$starships = $_POST['starships'];
}

if(isset($_POST['specie'])) {
$specie = $_POST['specie'];
}

if(isset($_POST['planet'])) {
$planet = $_POST['planet'];
}

use App\Database;
use App\Models\Person;
use App\Models\Vehicle;
use App\Models\Starship;
use App\Models\Specie;
use App\Models\Planets;

require_once 'vendor/autoload.php';

(new Database())->initConnexion();

Person::updateOrCreate(
	['name' => $name],
	['gender' 	=> $gender,
	'mass' 		=> $mass,
	'height' 	=> $height,
	'specie_id' => $specie,
	'planet_id' => $planet]
);

$person = Person::where('name', $name)->first();

if(isset($_POST['vehicles'])) {
$person->vehicles()->sync($vehicles);
}

if(isset($_POST['starships'])) {
$person->starships()->sync($starships);
}

$specieName = Specie::findOrFail($specie)->name;
$planetName = Specie::findOrFail($planet)->name;

?>

<br>
<div>
	<h2>Nouveau personnage créé : </h2><br>
	<p>
		Nom : <?= $name ?><br>
		Sexe : <?= $gender ?><br>
		Poids : <?= $mass ?><br>
		Taille : <?= $height ?><br>
		Espèce : <?= $specieName ?><br>
		Planète : <?= $planetName ?><br>

		<?php
			if(isset($_POST['vehicles']))
			{
				echo 'Véhicules : ';
				foreach ($vehicles as $vehicle) { echo '<br>' . Vehicle::findOrFail($vehicle)->name; } 
			}
			if(isset($_POST['starships']))
			{
				echo '<br>Starships : ';
				foreach ($starships as $starship) { echo '<br>' . Starship::findOrFail($starship)->name; }
			}
		?>

	</p>
	<a href='http://localhost/sw_exercice/sw_exam_eloquent/main.php'>Retour vers la saisie</a>
</div>
