<?php namespace MochalovNikita\BashennyeKrany\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateMochalovnikitaBashennyekrany extends Migration
{
    public function up()
    {
        Schema::create('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name');
            $table->string('condition');
            $table->string('brand');
            $table->integer('load_copasity');
            $table->integer('max_dep');
            $table->integer('load_max_dep');
            $table->integer('height');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mochalovnikita_bashennyekrany_');
    }
}
