<?php

use App\Database;
use App\Models\Person;
use App\Models\Vehicle;
use App\Models\Starship;
use App\Models\PersonVehicle;
use App\Models\PersonStarship;

require_once '../vendor/autoload.php';
(new Database())->initConnexion();


$persons = Person::with(['specie', "planet"])->get();
echo '
<table>
	<thead>
		<tr>
			<th>Nom</th>
			<th>Sexe</th>
			<th>Poids</th>
			<th>Taille</th>
			<th>Espece</th>
			<th>Planète</th>
			<th>Véhicules conduits</th>
			<th>Vaisseaux pilotés</th>
		</tr>
	</thead>
	<tbody>';

foreach ($persons as $person) {
	echo '<tr><th>' . $person->name . '</th>';
	echo '<th>' . $person->gender . '</th>';
	echo '<th>' . $person->mass . '</th>';
	echo '<th>' . $person->height . '</th>';
	echo '<th>';
	switch (is_object($person->specie)) {
		case False:
			echo '';
			break;
		default:
			echo $person->specie->name;
			break;
	}
	echo '</th>';
	echo '<th>' . $person->planet->name . '</th>';

	$pvehicles = PersonVehicle::where("person_id",$person->id)->get();
	echo '<th>';
	foreach ($pvehicles as $pv) {
		$p_vehicle = Vehicle::findOrFail(json_decode($pv)->vehicle_id)->name;
		echo $p_vehicle."<br>";
	}
	echo '</th>';

	$pstarhips = PersonStarship::where("person_id",$person->id)->get();
	echo '<th>';
	foreach ($pstarhips as $ps) {
		$p_starship = Starship::findOrFail(json_decode($ps)->starship_id)->name;
		echo $p_starship."<br>";
	}
	echo '</th>';
}

echo '	</tr>
	</tbody>
</table>';
