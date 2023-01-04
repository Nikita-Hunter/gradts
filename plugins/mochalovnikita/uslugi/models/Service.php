<?php namespace MochalovNikita\Uslugi\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mochalovnikita_uslugi_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public function scopeActive($query){
        return $query->where('active', 1);
    }
}
