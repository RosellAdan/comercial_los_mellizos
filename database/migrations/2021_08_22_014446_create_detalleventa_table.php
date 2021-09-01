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
            $table->unsignedBigInteger("codiprod");
            $table->unsignedBigInteger("codiv");
            $table->integer("cantidaventa");
            $table->integer("precioventa");
            $table->string("descripcionventa");
            $table->foreign("codiprod")->references("codiprod")->on("producto");
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
