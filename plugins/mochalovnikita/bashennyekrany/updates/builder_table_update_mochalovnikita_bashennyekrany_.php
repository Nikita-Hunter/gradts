<?php namespace MochalovNikita\BashennyeKrany\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaBashennyekrany extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->text('description')->default('Нет дополнительного описания')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->text('description')->default(null)->change();
        });
    }
}
