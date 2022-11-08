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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('correo')->nullable();
            $table->dateTime('fechaReserva');
            $table->integer('contacto');
            $table->longText('descripcionReserva');
            $table->unsignedBigInteger('sitio_id')->nullable();
            
            $table->foreign('sitio_id')->references ('id')->on('sitios')->onDelete('set null');
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
        Schema::dropIfExists('reservas');
    }
};
