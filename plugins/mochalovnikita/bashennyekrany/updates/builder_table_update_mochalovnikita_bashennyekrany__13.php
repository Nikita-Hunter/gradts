<?php namespace MochalovNikita\BashennyeKrany\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaBashennyekrany13 extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('meta_keywords');
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_keywords');
        });
    }
}
