<?php namespace MochalovNikita\Zapchasti\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mochalovnikita_zapchasti_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
