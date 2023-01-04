<?php namespace MochalovNikita\Zapchasti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaZapchastiCategory2 extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_zapchasti_category', function($table)
        {
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_zapchasti_category', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
