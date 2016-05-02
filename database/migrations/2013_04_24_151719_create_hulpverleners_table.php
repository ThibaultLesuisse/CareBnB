<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHulpverlenersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hulpverlener', function (Blueprint $table) {

            $table->increments('id');
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('email');
            $table->string('categorie');
            $table->integer('hulpverlener_tijd');
            $table->string('telefoonnummer');
            $table->string('adres');
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
        Schema::drop('hulpverlener');
    }
}
