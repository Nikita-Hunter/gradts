<?php namespace MochalovNikita\BashennyeKrany\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaBashennyekrany12 extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
