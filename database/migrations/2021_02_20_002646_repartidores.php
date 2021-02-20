<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Repartidores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repartidores', function (Blueprint $table) {
            $table->string('idrepartidor',32);
            $table->string('nombres');
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('telefono');
            $table->string('user');
            $table->string('password');
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
        Schema::dropIfExists('repartidores');
    }
}
