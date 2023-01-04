<?php namespace MochalovNikita\BashennyeKrany\Models;

use Model;

/**
 * Model
 */
class Crane extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mochalovnikita_bashennyekrany_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
