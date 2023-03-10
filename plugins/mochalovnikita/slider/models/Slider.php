<?php namespace MochalovNikita\Slider\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mochalovnikita_slider_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
