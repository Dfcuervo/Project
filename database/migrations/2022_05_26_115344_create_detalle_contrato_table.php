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
        Schema::create('detalle_contratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->engine='innodb';
            $table->integer('cotizacion');
            $table->integer('precio_final');

            $table->bigInteger('contrato_id')->unsigned();

            $table->foreign('contrato_id')->references('id')->on('contratos')
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->bigInteger('servicio_id')->unsigned();

            $table->foreign('servicio_id')->references('id')->on('servicios')
            ->onDelete("cascade")
            ->onUpdate("cascade");

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
        Schema::dropIfExists('detalle_contratos');
    }
};
