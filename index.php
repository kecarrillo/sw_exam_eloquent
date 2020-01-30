<?php

use App\Database;

require_once 'vendor/autoload.php';

(new Database())->initConnexion();

$name = $_POST['person_name'];
delete_a_person($name);
delete_a_planet($name);
