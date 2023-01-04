<?php namespace MochalovNikita\Zapchasti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateMochalovnikitaZapchastiCategoru extends Migration
{
    public function up()
    {
        Schema::create('mochalovnikita_zapchasti_categoru', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mochalovnikita_zapchasti_categoru');
    }
}
