<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['descricao'];

    public function types()
    {
        return $this->belongsToMany('App\Type', 'product_types', 'product_id', 'type_id')
        ->using('App\ProductType');
    }
}
