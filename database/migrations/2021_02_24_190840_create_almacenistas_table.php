<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacenistas', function (Blueprint $table) {
            $table->string('idalmacenista',32)->unique();
            $table->string('idsupervisor',32);
            $table->string('nombres');
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('telefono');
            $table->string('user')->unique();
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
        Schema::dropIfExists('almacenistas');
    }
}
