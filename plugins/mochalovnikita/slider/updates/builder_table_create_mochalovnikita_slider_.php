<?php namespace MochalovNikita\Slider\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateMochalovnikitaSlider extends Migration
{
    public function up()
    {
        Schema::create('mochalovnikita_slider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mochalovnikita_slider_');
    }
}
