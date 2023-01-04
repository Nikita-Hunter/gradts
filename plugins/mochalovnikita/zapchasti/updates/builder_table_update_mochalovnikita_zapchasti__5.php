<?php namespace MochalovNikita\Zapchasti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaZapchasti5 extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_zapchasti_', function($table)
        {
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_zapchasti_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
