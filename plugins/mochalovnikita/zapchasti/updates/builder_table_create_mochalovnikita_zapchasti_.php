<?php namespace MochalovNikita\Zapchasti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateMochalovnikitaZapchasti extends Migration
{
    public function up()
    {
        Schema::create('mochalovnikita_zapchasti_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->integer('category_id');
            $table->integer('condition');
            $table->integer('availability');
            $table->string('compatibility', 255);
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mochalovnikita_zapchasti_');
    }
}
