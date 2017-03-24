<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Banners.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:52:36pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Banners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('banners',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('titulo');
        
        $table->date('imagen');
        
        $table->String('thumb');
        
        $table->String('link');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('banners');
    }
}
