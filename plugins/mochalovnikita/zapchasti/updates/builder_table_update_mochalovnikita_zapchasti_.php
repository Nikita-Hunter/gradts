<?php namespace MochalovNikita\Zapchasti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaZapchasti extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_zapchasti_', function($table)
        {
            $table->string('sku', 255);
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_zapchasti_', function($table)
        {
            $table->dropColumn('sku');
        });
    }
}
