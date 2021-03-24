<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name', 'parent_id',
    ];

    // use for get child category
    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    // use for create or update according to category name
    public static function create_or_update(array $attributes, array $values = array()){
        $instance = static::firstOrNew($attributes);

        $instance->fill($values)->save();

        return $instance;
    }
}
