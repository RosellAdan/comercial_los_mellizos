<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id("ci");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("direccion");
            $table->integer("celular");
            $table->char("sexo");
            $table->unsignedBigInteger("idp");
            $table->foreign("idp")->references("idp")->on("tipopersonal");
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
        Schema::dropIfExists('personal');
    }
}
