<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa');
            $table->string('representante');
            $table->string('direccion');
            $table->string('telefono');
            $table->enum('estatus', ['espera', 'afiliado'])->default('espera');
            $table->string('rfc');
            $table->string('ciudad_id');
            $table->string('servicio_id')->default('1');
            $table->string('certificados')->default('sin certificados');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('register_users');
    }
}
