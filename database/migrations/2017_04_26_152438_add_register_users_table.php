<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegisterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_users', function (Blueprint $table) {
            $table->tinyInteger('verified')->default(0);
            $table->string('email_token')->nullable();
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
            $table->tinyInteger('verified')->default(0);
            $table->string('email_token')->nullable();
        });
    }
}