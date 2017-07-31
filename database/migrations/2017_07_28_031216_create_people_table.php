<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string("name")->index();
            $table->string('cpf',11)->unique();
            $table->date('birthdate')->index();
            $table->string('email')->index();
            $table->tinyInteger('marital_status');
            $table->json('parents');
            $table->tinyInteger('gender')->index();
            $table->json('address');
            $table->json('telephones');
            $table->string('nationality')->default('brasileiro');
            $table->string('medical_insurance')->nullable();
            $table->string('geriatric')->nullable();
            $table->string('doctors_phone')->nullable();
            $table->string('doctors_address')->nullable();
            $table->string('cronical_condiction')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
