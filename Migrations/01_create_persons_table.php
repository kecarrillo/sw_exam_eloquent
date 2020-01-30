<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('Persons', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('height');
    $table->string('mass');
    $table->string('gender');

    $table->foreign('vehicle_id')->references('id')->on('vehicles');
    $table->foreign('starship_id')->references('id')->on('starships');
});
