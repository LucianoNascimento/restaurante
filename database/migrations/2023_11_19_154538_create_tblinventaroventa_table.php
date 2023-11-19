<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblinventaroventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblinventaroventa', function (Blueprint $table) {
            $table->id();
            $table->integer('IDVENTA');
            $table->integer('IDPRODUCTO');
            $table->decimal('PRECIOUNITARIO',20,2);
            $table->integer('CANTIDAD');
            $table->integer('DESCARGADO')->comment('senha');
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
        Schema::dropIfExists('tblinventaroventa');
    }
}
