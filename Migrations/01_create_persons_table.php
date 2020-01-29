<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('Persons', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('height');
    $table->string('masse');
    $table->string('gender');

    $table->foreign('vehicule_id')->references('id')->on('vehicules');
    $table->foreign('starship_id')->references('id')->on('starships');
});
