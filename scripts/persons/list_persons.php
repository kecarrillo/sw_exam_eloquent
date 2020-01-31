<?php

$sql = "SELECT persons.name as name, persons.height as height, persons.mass as mass, persons.gender as gender, planets.name as planet , species.name as specie
        FROM `persons`
        LEFT JOIN planets on planet_id = planets.id
        LEFT JOIN species on specie_id = species.id";
