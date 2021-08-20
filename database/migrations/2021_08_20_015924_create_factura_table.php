<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id("numerofactura");
            $table->string("detalle");
            $table->integer("precio");
            $table->string("fechafactura");
            $table->unsignedBigInteger("codiv");
            $table->unsignedBigInteger("cic");
            $table->foreign("codiv")->references("codiv")->on("venta");
            $table->foreign("cic")->references("cic")->on("cliente");
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
        Schema::dropIfExists('factura');
    }
}
