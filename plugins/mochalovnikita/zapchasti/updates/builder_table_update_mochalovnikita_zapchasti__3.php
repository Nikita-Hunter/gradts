<?php namespace MochalovNikita\Zapchasti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaZapchasti3 extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_zapchasti_', function($table)
        {
            $table->string('slug', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_zapchasti_', function($table)
        {
            $table->string('slug', 255)->nullable(false)->change();
        });
    }
}
