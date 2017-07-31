<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_relationships', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->tinyInteger('relationship_level');
            $table->integer('client_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('people');
            $table->foreign('patient_id')->references('id')->on('people');
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
        Schema::dropIfExists('people_relationships');
    }
}
