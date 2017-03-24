<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBolsaTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsa_trabajo', function (Blueprint $table) {
            $table->string('titulo');
            $table->string('sueldo')->default('No mostrado por la empresa');
            $table->string('empresa');
            $table->longText('descripcion');
            $table->date('start');
            $table->date('end');
            $table->string('imagen')->default('default.png');
            $table->tinyInteger('activo')->default(1);
            $table->increments('id');
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
        Schema::dropIfExists('bolsa_trabajo');
    }
}
