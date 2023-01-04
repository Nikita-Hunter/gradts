<?php namespace MochalovNikita\Zapchasti\Models;

use Model;
use Mochalovnikita\Zapchasti\Models\Category;

/**
 * Model
 */
class Part extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mochalovnikita_zapchasti_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public function scopeActive($query, $category){
        return $query->where('active', 1)->whereHas('category', function($q) use($category){
            $q->where('slug', $category);
        });
    }
    public function getCategoryIdOptions(){
        $model = Category::lists('name', 'id');
        return $model;
    }
    public $hasOne = [
        'category' => ['Mochalovnikita\Zapchasti\Models\Category', 'key' => 'id', 'otherKey' => 'category_id']
    ];
    // public $belongsToMany = [
    //     'category' => [
    //         'Mochalovnikita\Zapchasti\Models\Category',
    //         'table' => 'mochalovnikita_zapchasti_category',
    //         'order' => 'name'
    //     ]
    // ];
}
