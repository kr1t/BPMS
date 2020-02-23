<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('avatar')->nullable();
            $table->integer('uid')->nullable();
            $table->string('name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('blood_type')->nullable();
            $table->text('address')->nullable();
            $table->text('drug_allergy')->nullable();
            $table->text('symptoms')->nullable();
            $table->integer('nurse_id')->unsigned();
            $table->string('caregiver_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}