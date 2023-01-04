<?php namespace MochalovNikita\Slider\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableDeleteMochalovnikitaSlider extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mochalovnikita_slider_');
    }
    
    public function down()
    {
        Schema::create('mochalovnikita_slider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('image');
        });
    }
}
