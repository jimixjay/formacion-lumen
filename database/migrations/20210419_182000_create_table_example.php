<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableExample extends Migration
{
    public function up()
    {
        Schema::create('example', function (Blueprint $table) {

            $table->bigIncrements('example_id');

            $table->string('name', 10)->nullable();
            $table->string('description', 20)->default('mensaje por defecto');
        });
    }

    public function down()
    {
        Schema::dropIfExists('example');
    }
}
