<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLugarDescripcionToCapacitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capacitaciones', function (Blueprint $table) {
            $table->string('descripcion');
            $table->string('lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('capacitaciones', function (Blueprint $table) {
            $table->dropColumn('descripcion');
            $table->dropColumn('lugar');
        });
    }
}
