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
	echo '<tr><th><a href="view_person.php?id=' . $person->id . '">' . $person->name . '</a></th>';
	echo '<th>' . $person->gender . '</th>';
	echo '<th>' . $person->mass . '</th>';
	echo '<th>' . $person->height . '</th>';
	echo '<th>';
	switch (is_object($person->specie)) {
		case False:
			echo '';
			break;
		default:
			echo '<a href="view_species.php?id=' . $person->specie_id . '">'.$person->specie->name.'</a>';
			break;
	}
	echo '</th>';
	echo '<th><a href="view_planet.php?id=' . $person->planet_id . '">' . $person->planet->name . '</a></th>';

	$pvehicles = PersonVehicle::where("person_id",$person->id)->get();
	echo '<th>';
	foreach ($pvehicles as $pv) {
		$p_vehicle = Vehicle::findOrFail(json_decode($pv)->vehicle_id)->name;
		echo '<a href="view_vehicle.php?id=' . json_decode($pv)->vehicle_id . '">'.$p_vehicle.'</a><br>';
	}
	echo '</th>';

	$pstarhips = PersonStarship::where("person_id",$person->id)->get();
	echo '<th>';
	foreach ($pstarhips as $ps) {
		$p_starship = Starship::findOrFail(json_decode($ps)->starship_id)->name;
		echo '<a href="view_vehicle.php?id=' . json_decode($ps)->starship_id .'">'.$p_starship.'</a><br>';
	}
	echo '</th>';
}

echo '	</tr>
	</tbody>
</table>';
