<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("codipro");
            $table->unsignedBigInteger("codiv");
            $table->integer("cantidaventa");
            $table->id("precioventa");
            $table->string("descripcionventa");
            $table->foreign("codipro")->references("codipro")->on("producto");
            $table->foreign("codiv")->references("codiv")->on("venta");
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
        Schema::dropIfExists('detalleventa');
    }
}
