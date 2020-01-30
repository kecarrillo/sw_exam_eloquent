<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Database;
use Illuminate\Database\Schema\Blueprint;

$database = new Database();

$database->getManager()->schema()->create('vehicles', function (Blueprint $table) {
    $table->increments('id');
    $table->text('name');
    $table->double(8,2)('length');
    $table->timestamps();
});