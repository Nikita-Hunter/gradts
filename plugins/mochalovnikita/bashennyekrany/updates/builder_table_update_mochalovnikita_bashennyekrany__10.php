<?php namespace MochalovNikita\BashennyeKrany\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaBashennyekrany10 extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->text('description')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->text('description')->nullable()->change();
        });
    }
}
