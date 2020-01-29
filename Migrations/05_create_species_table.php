<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('species', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->text('classification');

    $table->foreign('person_id')->references('id')->on('persons');
});
