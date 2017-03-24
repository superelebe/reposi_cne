<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Articles.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:30:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('articles',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('titulo');
        
        $table->String('subtitulo');
        
        $table->longText('cuerpo');
        
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
        Schema::drop('articles');
    }
}
