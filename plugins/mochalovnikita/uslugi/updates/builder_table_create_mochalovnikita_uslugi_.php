<?php namespace MochalovNikita\Uslugi\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateMochalovnikitaUslugi extends Migration
{
    public function up()
    {
        Schema::create('mochalovnikita_uslugi_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mochalovnikita_uslugi_');
    }
}
