<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            $table->id();
            $table->integer('Clave_R');
            $table->string('NOMBRE')->comment('nome da comida');
            $table->decimal('PRECIO',20,2)->comment('preco da comida');
            $table->text('DESCRIPCION')->comment('descrição da comida');
            $table->text('IMAGEN')->comment('foto da comida');
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
        Schema::dropIfExists('comidas');
    }
}
