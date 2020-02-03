<?php

use App\Database;
use App\Models\Person;
use App\Models\Specie;

require_once '../vendor/autoload.php';
(new Database())->initConnexion();

$species = Specie::where('id', $_GET['id'])->first();

echo '<h1>'.$species->name.'</h1>';

echo '<br><h2>Caractéristiques:</h2><br>';

echo '<p>Classification: '. $species->classification .'</p><br>';
echo '<p>Personnages: ';
foreach(Person::where('specie_id', $species->id)->get() as $s){
    echo '- ' . $s->name . '<br>';
}
echo '</p><br>';