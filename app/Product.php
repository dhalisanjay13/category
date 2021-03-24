<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'cat_id',
    ];

    // use for get category according to Product
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'cat_id');
    }

    // use for Create product
    public static function create_product(array $values = array()){
        $instance = static::query()->create($values)->save();
        return $instance;
    }
}
