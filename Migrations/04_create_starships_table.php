<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('starships', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->text('length');
    $table->integer('hyperdrive_rating');
});
