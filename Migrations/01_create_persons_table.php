<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('Persons', function (Blueprint $table) {
    $table->increments('id');
    $table->text('name');
    $table->int(11)('height');
    $table->int(11)('mass');
    $table->text('gender');
    $table->integer('vehicle_id')->unsigned();
    $table->integer('starship_id')->unsigned();
    $table->timestamps();

    $table->foreign('vehicle_id')->references('id')->on('vehicles');
    $table->foreign('starship_id')->references('id')->on('starships');
});
