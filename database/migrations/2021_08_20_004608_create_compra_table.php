<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->id("codicom");
            $table->string("fechacompra");
            $table->integer("totalcompra");
            $table->unsignedBigInteger("codip");
            $table->unsignedBigInteger("ci");
            $table->foreign("codip")->references("codip")->on("proveedor");
            $table->foreign("ci")->references("ci")->on("personal");
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
        Schema::dropIfExists('compra');
    }
}
