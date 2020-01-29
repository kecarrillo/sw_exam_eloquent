<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('vehicules', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('name')->unsigned();
    $table->integer('length')->unsigned();
});