<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function ($table) {
            $table->increments('id');
            $table->string('identifier');
            $table->integer('species_id');
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('base_experience')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('is_default');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}
