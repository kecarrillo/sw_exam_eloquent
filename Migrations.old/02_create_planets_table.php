<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('Planets', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->integer('diameter');
    $table->string('climate');
    $table->string('population');
    $table->integer('person_id')->unsigned();
    $table->timestamps();

    $table->foreign('person_id')->references('id')->on('persons');
});