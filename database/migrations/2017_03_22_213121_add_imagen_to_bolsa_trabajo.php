<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagenToBolsaTrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bolsa_trabajo', function (Blueprint $table) {
            $table->string('imagen')->default('default.png'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bolsa_trabajo', function (Blueprint $table) {
            $table->string('imagen')->default('default.png'); 
        });
    }
}
