<?php namespace MochalovNikita\BashennyeKrany\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaBashennyekrany4 extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->double('load_copasity', 255, 2)->nullable(false)->unsigned(false)->default(null)->change();
            $table->double('max_dep', 255, 2)->nullable(false)->unsigned(false)->default(null)->change();
            $table->double('load_max_dep', 255, 2)->nullable(false)->unsigned(false)->default(null)->change();
            $table->double('height', 255, 2)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_bashennyekrany_', function($table)
        {
            $table->integer('load_copasity')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('max_dep')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('load_max_dep')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('height')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
