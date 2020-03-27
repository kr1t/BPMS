<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNurseChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('SIS')->nullable();
            $table->integer('DIA')->nullable();
            $table->integer('BPM')->nullable();
            $table->text('wound')->nullable();
            $table->text('infection')->nullable();
            $table->string('tube');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nurse_checks');
    }
}
