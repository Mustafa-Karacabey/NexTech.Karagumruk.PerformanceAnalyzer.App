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
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identityNumber', 11)->nullable();
            $table->string('name', 45)->nullable();
            $table->string('surname', 45)->nullable();
            $table->string('position', 45)->nullable();
            $table->string('height', 45)->nullable();
            $table->string('weight', 45)->nullable();
            $table->dateTime('birthdate')->nullable();
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
        Schema::dropIfExists('players');
    }
};
