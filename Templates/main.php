<?php

use App\Database;
use App\Models\Person;
use App\Models\Vehicle;
use App\Models\Starship;
use App\Models\Specie;
use App\Models\Planet;

require_once '../vendor/autoload.php';

(new Database())->initConnexion();

//$name = $_POST['person_name'];
//delete_a_person($name);
//delete_a_planet($name);

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
	//try {
	//	echo '<th>' . json_decode($person->load(['specie'])->specie)->name . '</th>';
	//} catch {
	//	var_dump(json_decode($person->load(['specie'])->specie));
	//}
	//try {
	//	echo '<th>' . json_decode($person->load(['planet'])->planet)->name . '</th></tr>';
	//} catch {
	//	var_dump(json_decode($person->load(['planet'])->planet));
	//}
}

echo '	</tr>
	</tbody>
</table>';
