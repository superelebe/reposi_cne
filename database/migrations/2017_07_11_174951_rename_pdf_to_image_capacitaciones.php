<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePdfToImageCapacitaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capacitaciones', function (Blueprint $table) {
            $table->renameColumn('pdf', 'imagen');
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
            $table->renameColumn('imagen', 'pdf');
        });
    }
}
