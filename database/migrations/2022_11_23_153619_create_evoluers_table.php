<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evoluers', function (Blueprint $table) {
            $table->id();
            $table->date('dateD');
            $table->date('dateF');
            $table->integer('primeTransport');
            $table->integer('mat_id')->unsigned();
            $table->foreign('mat_id')->references('mat')->on('etudiants');
            $table->integer('NumE_id')->unsigned();
            $table->foreign('NumE_id')->references('NumE')->on('entreprises');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('evoluers');
    }
};
