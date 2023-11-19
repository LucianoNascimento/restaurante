<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblventas', function (Blueprint $table) {
            $table->id();
            $table->string('ClaveTransaccion');
            $table->text('paypalDatos');
            $table->dateTime('Fecha');
            $table->integer('Numero');
            $table->decimal('Total',60,2);
            $table->string('status',200);
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
        Schema::dropIfExists('tblventas');
    }
}
