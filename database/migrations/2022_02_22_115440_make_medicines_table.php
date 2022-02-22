<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function(Blueprint $table){
            $table->id();
            $table->string('generic_name');
            $table->longText('form');
            $table->string('restriction_formula');
            $table->longText('description');
            $table->tinyInteger('faskes_tk1');
            $table->tinyInteger('faskes_tk2');
            $table->tinyInteger('faskes_tk3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
