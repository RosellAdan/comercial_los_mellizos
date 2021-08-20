<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallecompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecompra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("codicom");
            $table->unsignedBigInteger("codipro");
            $table->integer("preciocompra");
            $table->id("cantidadcompra");
            $table->string("descripcion");
            $table->foreign("codicom")->references("codicom")->on("compra");
            $table->foreign("codipro")->references("codiprod")->on("producto");
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
        Schema::dropIfExists('detallecompra');
    }
}
