<?php namespace MochalovNikita\Zapchasti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMochalovnikitaZapchastiCategory extends Migration
{
    public function up()
    {
        Schema::rename('mochalovnikita_zapchasti_categoru', 'mochalovnikita_zapchasti_category');
    }
    
    public function down()
    {
        Schema::rename('mochalovnikita_zapchasti_category', 'mochalovnikita_zapchasti_categoru');
    }
}
