<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagenToRegisterUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_users', function (Blueprint $table) {
            $table->string('imagen');
            $table->string('cv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register_users', function (Blueprint $table) {
            $table->dropColumn('imagen');
            $table->dropColumn('cv');
        });
    }
}
