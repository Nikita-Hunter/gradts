<?php namespace MochalovNikita\Uslugi\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaUslugi extends Migration
{
    public function up()
    {
        Schema::table('mochalovnikita_uslugi_', function($table)
        {
            $table->boolean('active');
        });
    }
    
    public function down()
    {
        Schema::table('mochalovnikita_uslugi_', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
