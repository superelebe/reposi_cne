<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInversionLugarHorarioToCalendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calendar', function (Blueprint $table) {
            $table->string('lugar')->nullable();
            $table->string('horarios')->nullable();
            $table->string('inversion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calendar', function (Blueprint $table) {
            $table->string('lugar')->nullable(); 
            $table->string('horarios')->nullable();
            $table->string('inversion')->nullable();
        });
    }
}
