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
        Schema::create('promocions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_promocion',45);
            $table->longText('descripcionpromocion');
            $table->string('descuento');
            $table->dateTime('fechai');
            $table->dateTime('fechaf');
           
          
            $table->unsignedBigInteger('sitio_id')->nullable();
            $table->foreign('sitio_id') ->references('id')->on('sitios')->onDelete('set null');
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
        Schema::dropIfExists('promocions');
    }
};
