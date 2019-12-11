<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['descricao'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_types', 'type_id', 'product_id')
        ->using('App\ProductType');
    }
}
