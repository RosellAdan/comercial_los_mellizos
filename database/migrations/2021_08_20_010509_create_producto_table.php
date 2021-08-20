<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id("codiprod");
            $table->string("descripcion");
            $table->integer("cantidadstock");
            $table->integer("precio");
            $table->unsignedBigInteger("ci");
            $table->unsignedBigInteger("coditp");
            $table->foreign("ci")->references("ci")->on("personal");
            $table->foreign("coditp")->references("coditp")->on("tipoproducto");
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
        Schema::dropIfExists('producto');
    }
}
