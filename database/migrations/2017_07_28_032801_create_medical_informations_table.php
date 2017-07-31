<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_informations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('person_id')->unsigned();
            $table->integer('cid_id')->unsigned()->index();
            $table->text('observation');
            $table->integer('professional_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('professional_id')->references('id')->on('people');
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
        Schema::dropIfExists('medical_informations');
    }
}
